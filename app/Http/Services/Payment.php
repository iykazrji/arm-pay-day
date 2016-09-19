<?php

namespace App\Http\Services;

use Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Guzzle\Http\Exception\ClientErrorResponseException;

class Payment
{
	public function addPaymentDetails($data)
	{

		$data = json_encode(json_encode($data));

		$http = new Client();

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/PaymentDetails/Create', [
			'headers' => [
				'Accept'  		=> 'application/json',
				'Content-Type'  	=> 'application/json',
			],
			
			'auth' => ['arm', '@rm1k0y1l@g0s'],
				'body' => $data
			]);

			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $responseBody = $exception->getResponse()->getBody(true);
		}
	}

	public function getPaymentDetail($data)
	{

		 $data = json_encode($data);

			$http = new Client();

			try 
			{
				$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/PaymentDetails/FetchPaymentDetails', [
				   'headers' => [
				      'Accept'  		=> 'application/json',
				      'Content-Type'  	=> 'application/json',
				   	],
				   'auth' => ['arm', '@rm1k0y1l@g0s'],
				   'body' => $data
				]);
				
				return $request->getBody();
			} 
			catch (ClientException $exception) 
			{
			    return $responseBody = $exception->getResponse()->getBody(true);
			}
	}

	public function updatePayment($data)
	{

		 $data = json_encode($data);

			$http = new Client();

			try 
			{
				$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/PaymentDetails/Update', [
				   'headers' => [
				      'Accept'  		=> 'application/json',
				      'Content-Type'  	=> 'application/json',
				   	],
				   'auth' => ['arm', '@rm1k0y1l@g0s'],
				   'body' => $data
				]);
				
				return $request->getBody();
			} 
			catch (ClientException $exception) 
			{
			    return $responseBody = $exception->getResponse()->getBody(true);
			}
	}


} 