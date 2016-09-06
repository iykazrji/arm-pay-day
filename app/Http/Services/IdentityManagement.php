<?php

namespace App\Http\Services;

use GuzzleHttp\Client;

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

		$request = $http->request('POST', 'https://api.arm.com.ng/Pdiv/Account/Register', [
		   'body' => $data
		]);

		$statusCode = $request->getStatusCode();

		if($statusCode == 200)
		{
			return true;
		}
		else
		{
				return false;
		}
		
	}
}