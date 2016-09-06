<?php

namespace App\Http\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Guzzle\Http\Exception\ClientErrorResponseException;

class IdentityManagement
{

	public function registerUserService($data)
	{

		$data = json_encode(json_encode($data));

		$http = new Client([
	       'base_uri' => 'https://api.arm.com.ng/Pdiv/Account/',
	       'headers' => [
	           'Content-Type'  => 'application/json'
	       	]
		]);

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Account/Register', [
			   'body' => $data
			]);

			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $responseBody = $exception->getResponse()->getBody(true);
		}
	}

	public function loginUserService($data)
	{
		$data = json_encode(json_encode($data));

		$http = new Client([
	       'base_uri' => 'https://api.arm.com.ng/Pdiv/Account/',
	       'headers' => [
	           'Content-Type'  => 'application/json'
	       	]
		]);
		
		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Account/Login', [
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