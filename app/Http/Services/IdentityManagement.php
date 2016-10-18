<?php

namespace App\Http\Services;

use Auth;
use App\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Guzzle\Http\Exception\ClientErrorResponseException;

class IdentityManagement
{

	public function registerUserService($data)
	{

		$data = json_encode(json_encode($data));

		$http = new Client();

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Account/Register', [
			   'headers' => [
			       'Accept'  		=> 'application/json',
			       'Content-Type'  	=> 'application/json',
			   	],
			   'auth' => ['arm', '@rm1k0y1l@g0s'],
			   'body' => $data
			]);

			return json_decode(" ' " .  $request->getBody() . " ' ")->User_id;

			$user = new User;
			
			$user->user_id = ''; 


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

		$http = new Client();
		
		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Account/Login', [
			   'headers' => [
			       'Accept'  		=> 'application/json',
			       'Content-Type'  	=> 'application/json',
			   	],
			   'auth' => ['arm', '@rm1k0y1l@g0s'],
			   'body' => $data
			]);

			$time   =  time() + 3600 * 8347;
			$path   = '/';
			$data  	= $request->getBody();
			$domain = env('host'); 

			setcookie("__ARM_UA", $data, $time, $path, $domain);	
			
			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $getResponseeBody = $exception->getResponse()->getBody(true);
		}
	}

	public function getUserDetail($data)
	{
		$data = json_encode($data);

		$http = new Client();
		
		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Account/FetchUser', [
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
		    return $getResponseeBody = $exception->getResponse()->getBody(true);
		}
	}

	public function updateUser($data)
	{
		$data = json_encode($data);

		$http = new Client();
		
		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Account/Update', [
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
		    return $getResponseeBody = $exception->getResponse()->getBody(true);
		}
	}


}