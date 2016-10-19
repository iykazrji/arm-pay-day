<?php

namespace App\Http\Validations;

use Validator;

class UserValidation
{

	public function registerUserValidation($data)
	{	
		$validator = Validator::make($data, [
			'BVN' 				=> 'required|max:50|min:4|alpha_num',
			'Email' 			=> 'required|email',
			'Status' 			=> 'required',
			'Address' 			=> 'required',
			'Firstname' 			=> 'required|max:50|min:4|alpha_num',
			'Surname' 			=> 'required|max:50|min:4|alpha_num',
			'Password' 			=> 'required|max:50|min:4',
			'BankName' 			=> 'required|max:50|min:4',
			'Middlename' 		=> 'required|max:50|min:4|alpha_num',
			'Phonenumber' 		=> 'required|min:11',
			'BankAccountNo' 	=> 'required|max:10|min:10',
			'SecurityAnswer' 	=> 'required',
			'SecurityQuestion' 	=> 'required|max:50|min:4',
		]);

		return $validator;
	}

	public function loginUserValidation($data)
	{	
		$validator = Validator::make($data, [
			'Username' 	=> 'required|max:50|string',
			'Password' 	=> 'required|alpha_num|max:50',
		]);

		return $validator;
	}

	public function updateUserValidation($data)
	{	
		$validator = Validator::make($data, [
			'BVN' 				=> 'required|max:50|min:4|alpha_num',
			'Email' 			=> 'required|email',
			'UserId' 			=> 'required|string',
			'Status' 			=> 'required|max:50|min:4|alpha_num',
			'Address' 			=> 'required|alpha_num',
			'Surname' 			=> 'required|max:50|min:4|alpha_num',
			'Firstname' 			=> 'required|max:50|min:4|alpha_num',
			'BankName' 			=> 'required|max:50|min:4|alpha_num',
			'Middlename' 		=> 'required|max:50|min:4|alpha_num',
			'Phonenumber' 		=> 'required|min:11|integer',
			'BankAccountNo' 	=> 'required|max:50|min:4|alpha_num',
			'RegistrationDate' 	=> 'required|min:11|date',
		]);

		return $validator;
	}
}