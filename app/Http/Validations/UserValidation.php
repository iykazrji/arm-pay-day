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
			'Status' 			=> 'required|max:50|min:4|alpha_num',
			'Address' 			=> 'required|alpha_num',
			'Surname' 			=> 'required|max:50|min:4|alpha_num',
			'Password' 			=> 'required|max:50|min:4',
			'BankName' 			=> 'required|max:50|min:4|alpha_num',
			'Middlename' 		=> 'required|max:50|min:4|alpha_num',
			'Phonenumber' 		=> 'required|min:11|integer',
			'BankAccountNo' 	=> 'required|max:50|min:4|alpha_num',
			'SecurityAnswer' 	=> 'required|alpha_num',
			'SecurityQuestion' 	=> 'required|max:50|min:4|alpha_num',
		]);

		return $validator;
	}

	public function loginUserValidation($data)
	{	
		$validator = Validator::make($data, [
			'Username' 	=> 'required|max:50|min:4|string',
			'Password' 	=> 'required|alpha_num|max:50',
		]);

		return $validator;
	}
}