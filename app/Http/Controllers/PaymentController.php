<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
	public function postAddPaymentDetails(Request $request)
	{
		$validator = $this->paymentValidation->addPaymentDetailsValidation($request->all());
		
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

	public function updatePayment(Request $request)
	{
		$validator = $this->paymentValidation->updatePaymentValidation($request->all());
		
		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->payment->updatePayment($request->all());
		}
			
	}

	public function getPaymentDetail($id)
	{
		if (isset($id) && $id != null ) 
		{
			return $this->payment->getPaymentDetail($id);
		}
		else
		{
			return 'you need user id to get the payment details';
		}
	}
}
