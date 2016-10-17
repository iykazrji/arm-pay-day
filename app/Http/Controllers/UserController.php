<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{

	public function postCreateUserAccount(Request $request)
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
			return $this->identityManagement->registerUserService($request->all());
		}

		return $response;
	}

	public function postLoginUser(Request $request)
	{

		$validator = $this->userValidation->loginUserValidation($request->all());

		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->identityManagement->loginUserService($request->all());		
		}
	}

	public function getUser()
	{
		$user = "PIV100012";
		return $this->identityManagement->getUserDetail($user);		
	}

	public function postUpdateUser(Request $request)
	{
		
		$validator = $this->userValidation->updateUserValidation($request->all());

		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->identityManagement->updateUser($request->all());		
		}
	}
}
