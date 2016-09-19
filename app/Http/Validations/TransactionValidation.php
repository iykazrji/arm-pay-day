<?php

namespace App\Http\Validations;

use Validator;

class TransactionValidation
{

	public function addTransactionValidation($data)
	{	
		$validator = Validator::make($data, [
			'Status' 			=> 'required|alpha_num',
			'Amount' 			=> 'required|numeric',
			'AppUserId' 			=> 'required|max:50|min:4|alpha_num',
			'TransactionType' 			=> 'required|alpha_num',
			'TransactionDate' 			=> 'required|date',
		]);

		return $validator;
	}

	public function updatePaymentValidation($data)
	{	
		$validator = Validator::make($data, [
			'Pin' 				=> 'required|alpha_num',
			'CVV2' 				=> 'required|min:3|integer',
			'AppUserId' 			=> 'required|max:50|min:4|alpha_num',
			'Status' 			=> 'required|alpha_num',
			'Amount' 			=> 'required|integer',
			'CardNo' 			=> 'required|max:50|min:4|alpha_num',
			'PaymentFrequency' 	=> 'required|max:50|min:4|alpha_num',
			'PaymentMode' 		=> 'required|max:50|min:4|alpha_num',

		]);

		return $validator;
	}
}