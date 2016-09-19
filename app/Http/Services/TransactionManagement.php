<?php

namespace App\Http\Services;

use Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Guzzle\Http\Exception\ClientErrorResponseException;

class TransactionManagement
{
	public function addPaymentDetails($data)
	{

		$data = json_encode(json_encode($data));

		$http = new Client();

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/UserTransactions/Create', [
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

	public function currentBalance($data)
	{
		
		$data = json_encode($data);

		$http = new Client();

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/UserTransactions/CurrentBalance', [
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

	public function lastCredit($data)
	{
		
		$data = json_encode($data);

		$http = new Client();

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/UserTransactions/LastCredit', [
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

	public function lastRedemption($data)
	{
		
		$data = json_encode($data);

		$http = new Client();

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/UserTransactions/LastRedemption', [
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

	public function transactionHistory($data)
	{
		
		$data = json_encode($data);

		$http = new Client();

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/UserTransactions/TransactionHistory', [
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