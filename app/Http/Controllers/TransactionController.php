<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TransactionController extends Controller
{
	public function addTransaction(Request $request)
	{
		$validator = $this->transactionValidation->addTransactionValidation($request->all());
		
		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->payment->addPaymentDetails($request->all());
		}
	}
}
