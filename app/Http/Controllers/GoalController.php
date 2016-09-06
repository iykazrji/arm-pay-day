<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GoalController extends Controller
{
	public function postCreateGoal(Request $request)
	{
		$validator = $this->goalsManagementValidation->createGoalValidation($request->all());
 
		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->goalsManagement->createGoal($request->all());
		}
	}
}
