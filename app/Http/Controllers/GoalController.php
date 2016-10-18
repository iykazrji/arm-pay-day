<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;


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
			$auth_user_id = AuthUserData()->UserId;
			$db_user = User::where('user_id', $auth_user_id)->get();
			
			if ( $db_user->count() > 0 ) 
			{
				return $this->flutterwave->chargeWithToken($db_user->first()->account_id);	
			}
			else
			{
				return $this->flutterwave->chargeCard($request->all());
			}

			return $this->goalsManagement->createGoal($request->all());
		}
	}

	public function postUpdateGoal(Request $request)
	{
		$validator = $this->goalsManagementValidation->updateGoalValidation($request->all());
 	
		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->goalsManagement->updateGoal($request->all());
		}
	}
	
	public function postDeleteGoal(Request $request)
	{

		$validator = $this->goalsManagementValidation->deleteGoalValidation($request->all());
 
		if ($validator->fails())
		{
		    return [
		        "status"    =>"501",
		        "message"   => $validator->errors()
		    ];
		}
		else 
		{
			return $this->goalsManagement->deleteGoal($request['GoalId']);
		}
	}

	public function getAllGoals(Request $request)
	{
		if ($request->has('UserId')) 
		{
			return $this->goalsManagement->getAllGoals($request['UserId']);
		}
		else
		{
			return "you need the user id to get the goals";
		}	
	}
	
	public function getGoal($id)
	{
		if (isset($id)  && $id != null) 
		{
			return $this->goalsManagement->getGoal($id);
		}
		else
		{
			return "you need the user id to get the goals";
		}
		}

}
