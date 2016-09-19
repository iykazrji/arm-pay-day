<?php

namespace App\Http\Validations;

use Validator;

class PaymentValidation
{

	public function addPaymentDetailsValidation($data)
	{	
		$validator = Validator::make($data, [
			'Pin' 				=> 'required|alpha_num',
			'CVV2' 				=> 'required|min:3|integer',
			'CardNo' 			=> 'required|max:50|min:4|alpha_num',
			'Amount' 			=> 'required|numeric',
			'Status' 			=> 'required|alpha_num',
			'AppUserId' 			=> 'required|max:50|min:4|alpha_num',
			'PaymentMode' 		=> 'required|max:50|min:4|alpha_num',
			'PaymentFrequency' 	=> 'required|max:50|min:4|alpha_num',
		]);

		return $validator;
	}
}