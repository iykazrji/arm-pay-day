<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

	public function createUserAccount(Request $request)
	{

		$validator = $this->userValidation->registerUserValidation($request->all());

		if ($validator->fails())
		{
		    $response =   [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			$create_user  = $this->identityManagement->registerUserService($request->all());
			
			if ($create_user) 
			{
				$response = "the registration was ok";
			}
			else
			{
				$response = "something went wrong from api";
			}

		}

		return $response;
	}
}
