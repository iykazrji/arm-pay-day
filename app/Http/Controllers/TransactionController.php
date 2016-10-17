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
			return $this->transactionManagement->addPaymentDetails($request->all());
		}
	}


	public function currentBalance($id)
	{
		if (isset($id) && $id != null ) 
		{
			return $this->transactionManagement->currentBalance($id);
		}
		else
		{
			return "you need the id the do the do";
		}
	}

	public function getLastCredit($id)
	{
		if (isset($id) && $id != null ) 
		{
			return $this->transactionManagement->lastCredit($id);
		}
		else
		{
			return "you need the id the do the do";
		}
	}

	public function getLastRedemption($id)
	{
		if (isset($id) && $id != null ) 
		{
			return $this->transactionManagement->lastRedemption($id);
		}
		else
		{
			return "you need the id the do the do";
		}
	}

	public function getTransactionHistory(Request $request)
	{
		$validator = $this->transactionValidation->getTransactionHistoryValidation($request->all());
		
		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->transactionManagement->transactionHistory($request->all());
		}
	}
}
