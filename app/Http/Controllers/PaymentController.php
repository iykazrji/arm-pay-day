<?php

namespace App\Http\Controllers;

use Flutterwave\Banks;
use Flutterwave\AccessAccount;
use Flutterwave\Flutterwave;

use App\Http\Requests;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
	public function postAddPaymentDetails(Request $request)
	{
		$validator = $this->paymentValidation->addPaymentDetailsValidation($request->all());
		
		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->payment->addPaymentDetails($request->all());
		}	
	}	

	public function updatePayment(Request $request)
	{
		$validator = $this->paymentValidation->updatePaymentValidation($request->all());
		
		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->payment->updatePayment($request->all());
		}	
	}

	public function getPaymentDetail($id)
	{
		if (isset($id) && $id != null ) 
		{
			return $this->payment->getPaymentDetail($id);
		}
		else
		{
			return 'you need user id to get the payment details';
		}
	}

	public function payment()
	{
		$merchantKey = "tk_vpBO9zDon6"; //can be found on flutterwave dev portal
		$apiKey = "tk_Ajo1pDzHJGFROKigCaTL"; //can be found on flutterwave dev portal
		$env = "staging"; //this can be production when ready for deployment
		
		Flutterwave::setMerchantCredentials($merchantKey, $apiKey, $env);
		
		$result = Banks::allBanks();

		dd($result);
	}

	public function chargeCard()
	{
		$merchantKey = "tk_vpBO9zDon6"; //can be found on flutterwave dev portal
		$apiKey = "tk_Ajo1pDzHJGFROKigCaTL"; //can be found on flutterwave dev portal
		$env = "staging"; //this can be production when ready for deployment
		
		Flutterwave::setMerchantCredentials($merchantKey, $apiKey, $env);
		
		$accountNumber = "0007547095"; //account number you want to charge
		$result = AccessAccount::initiate($accountNumber);
		
		dd($result);

		if ($result->isSuccessfulResponse()) {
			dd(1);
		}

	}
}
