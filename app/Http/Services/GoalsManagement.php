<?php

namespace App\Http\Services;

use Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Guzzle\Http\Exception\ClientErrorResponseException;

class GoalsManagement
{
	public function createGoal($data)
	{

		$data = json_encode(json_encode($data));

		$http = new Client([
	       'base_uri' => 'https://api.arm.com.ng/Pdiv/Goal/Create',
	       'headers' => [
	           'Content-Type'  => 'application/json'
	       	]
		]);

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Goal/Create', [
			   'body' => $data
			]);

			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $responseBody = $exception->getResponse()->getBody(true);
		}
	}

	public function updateGoal($data)
	{

		$data = json_encode(json_encode($data));

		$http = new Client([
	       'base_uri' => 'https://api.arm.com.ng/Pdiv/Goal/Create',
	       'headers' => [
	           'Content-Type'  => 'application/json'
	       	]
		]);

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Goal/Update', [
			   'body' => $data
			]);

			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $responseBody = $exception->getResponse()->getBody(true);
		}
	}

	public function deleteGoal()
	{
		$data = json_encode(json_encode($data));

		$http = new Client([
	       'base_uri' => 'https://api.arm.com.ng/Pdiv/Goal/Create',
	       'headers' => [
	           'Content-Type'  => 'application/json'
	       	]
		]);

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Goal/Delete', [
			   'body' => $data
			]);

			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $responseBody = $exception->getResponse()->getBody(true);
		}	
	}

	public function getAllGoals()
	{
		$data = json_encode(json_encode($data));

		$http = new Client([
	       'base_uri' => 'https://api.arm.com.ng/Pdiv/Goal/Create',
	       'headers' => [
	           'Content-Type'  => 'application/json'
	       	]
		]);

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/PaydayInvestot/Goal/Fetch_All_Goals', [
			   'body' => $data
			]);

			return $request->getBody();
		} 
		catch (ClientException $exception) 
		{
		    return $responseBody = $exception->getResponse()->getBody(true);
		}	
	}
	public function deleteGoal()
	{
		$data = json_encode(json_encode($data));

		$http = new Client([
	       'base_uri' => 'https://api.arm.com.ng/Pdiv/Goal/Create',
	       'headers' => [
	           'Content-Type'  => 'application/json'
	       	]
		]);

		try 
		{
			$request = $http->request('POST', 'https://api.arm.com.ng/PaydayInvestot/Goal/Fetch_All_Goals', [
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