<?php

namespace App\Http\Services;

use Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Guzzle\Http\Exception\ClientErrorResponseException;

class GoalsManagement
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

			$time   =  time() + 3600;
			$path   = '/';
			$data   = json_encode($request->getBody());
			$domain = env('host'); 

			setcookie("__AUAT_TOKEN", $data, $time, $path, $domain);	

			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $getResponseeBody = $exception->getResponse()->getBody(true);
		}
	}

	public function getUserDetail($data)
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
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Account/FetchUser', [
			   'body' => $data
			]);
			
			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $getResponseeBody = $exception->getResponse()->getBody(true);
		}
	}

	public function updateUser($data)
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
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Account/Update', [
			   'body' => $data
			]);
			
			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $getResponseeBody = $exception->getResponse()->getBody(true);
		}
	}
}