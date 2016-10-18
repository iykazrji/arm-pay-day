<?php

namespace App\Http\Services;

use Flutterwave\Card;
use Flutterwave\Banks;
use Flutterwave\AuthModel;
use Flutterwave\Countries;
use Flutterwave\Flutterwave;
use Flutterwave\AccessAccount;
use Flutterwave\FlutterEncrypt;
use App\Http\Services\Encrypt;

class FlutterwaveService
{
	public function __construct()
	{
		$this->env 			= "staging";
		$this->apiKey 		= "tk_Ajo1pDzHJGFROKigCaTL";
		$this->merchantkey 	= "tk_vpBO9zDon6";
	}

	public function chargeCard($data)
	{
		$encrypt = new Encrypt;

		$http = new \GuzzleHttp\Client(['base_uri' => 'http://staging1flutterwave.co:8080/pwc/rest/card/mvva/']);

		$json = json_encode([
		    "amount" => $encrypt->encrypt3Des($data['GoalAmount'], "tk_Ajo1pDzHJGFROKigCaTL"),
		    "authmodel" => $encrypt->encrypt3Des("NOAUTH", "tk_Ajo1pDzHJGFROKigCaTL"),
		    "cardno" => $encrypt->encrypt3Des("5445842588802006", "tk_Ajo1pDzHJGFROKigCaTL"),
		    "currency" => $encrypt->encrypt3Des("NGN", "tk_Ajo1pDzHJGFROKigCaTL"),
		    "custid" => $encrypt->encrypt3Des("tester_funsho", "tk_Ajo1pDzHJGFROKigCaTL"),
		    "cvv" => $encrypt->encrypt3Des("655", "tk_Ajo1pDzHJGFROKigCaTL"),
		    "expirymonth" => $encrypt->encrypt3Des("08", "tk_Ajo1pDzHJGFROKigCaTL"),
		    "expiryyear" => $encrypt->encrypt3Des("18", "tk_Ajo1pDzHJGFROKigCaTL"),
		    "merchantid" => "tk_vpBO9zDon6",
		    "narration" => $encrypt->encrypt3Des("Testing the API", "tk_Ajo1pDzHJGFROKigCaTL"),
		]);

		$r = $http->request('POST', 'pay', [
		    'body' => $json,
		    'headers' => [
		        'Content-Type' => 'application/json'
		    ]
		]);

		$data = json_decode($r->getBody(), true);

		echo "<br>Status Code : ".$r->getStatusCode();
		echo "<br>Reason Phrase: ".$r->getReasonPhrase();
		echo "<br>Transaction Reference: ".$data['data']['transactionreference'];

		/**
		 * This guy is what we will save for recurrent debit later on
		 */
		echo "<br>Response Token: ".$data['data']['responsetoken'];

		// new you will save the token for the user
		$this->saveNewUserToken($data['data']['responsetoken']);
	}

	public function chargeWithToken($data)
	{
		$encrypt = new Encrypt;

		$http = new \GuzzleHttp\Client(['base_uri' => 'http://staging1flutterwave.co:8080/pwc/rest/card/mvva/']);

		$r_json = json_encode([
		    "amount" => $encrypt->encrypt3Des("50000", "tk_Ajo1pDzHJGFROKigCaTL"),
			"currency" => $encrypt->encrypt3Des("NGN", "tk_Ajo1pDzHJGFROKigCaTL"),
			"custid" => $encrypt->encrypt3Des("tester_funsho", "tk_Ajo1pDzHJGFROKigCaTL"),
		    "merchantid" => "tk_vpBO9zDon6",
			"narration" => $encrypt->encrypt3Des("Recurrent Debit for ".date('d/y'), "tk_Ajo1pDzHJGFROKigCaTL"),
			"chargetoken" => $encrypt->encrypt3Des($data, "tk_Ajo1pDzHJGFROKigCaTL")
		]);

		$r_r = $http->request('POST', 'pay', [
		    'body' => $r_json,
		    'headers' => [
		        'Content-Type' => 'application/json'
		    ]
		]);

		$r_data = json_decode($r_r->getBody(), true);

		echo "<br>Status Code : ".$r_r->getStatusCode();
		echo "<br>Reason Phrase: ".$r_r->getReasonPhrase();

		var_dump($r_data);
	}


	public function saveNewUserToken($token)
	{
		$user = User::where('user_id', AuthUserData()->UserId)->get();
		$user->account_id = $token;
		$user->save();
	}

}