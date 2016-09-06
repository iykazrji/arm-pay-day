<?php

namespace App\Http\Validations;

use Validator;

class GoalsManagementValidation
{

	public function createGoalValidation($data)
	{	
		$validator = Validator::make($data, [
			'Status' 			=> 'alpha_num',
			'GoalId' 			=> 'max:50|min:4|alpha_num',
			'ItemName' 			=> 'required|max:50|min:4|alpha_num',
			'ItemType' 			=> 'required|alpha_num|max:50',
			'ItemClass' 		=> 'required|alpha_num|max:50',
			'AppUserId' 		=> 'required|max:50|min:4|alpha_num',
			'GoalAmount' 		=> 'required|integer',
			'DateCreated' 		=> 'required|date',
			'PrefferedVendor' 	=> 'required|alpha_num|max:50',
			'ItemDescription' 	=> 'required|alpha_num',
		]);

		return $validator;
	}

	public function updateGoalValidation($data)
	{	
		$validator = Validator::make($data, [
			'Status' 			=> 'required|alpha_num',
			'GoalId' 			=> 'required|max:50|min:4|alpha_num',
			'ItemName' 			=> 'required|max:50|min:4|alpha_num',
			'ItemType' 			=> 'required|alpha_num|max:50',
			'ItemClass' 		=> 'required|alpha_num|max:50',
			'AppUserId' 		=> 'required|max:50|min:4|alpha_num',
			'GoalAmount' 		=> 'required|integer',
			'DateCreated' 		=> 'required|date',
			'PrefferedVendor' 	=> 'required|alpha_num|max:50',
			'ItemDescription' 	=> 'required|alpha_num',
		]);

		return $validator;
	}

	public function deleteGoalValidation($data)
	{	
		$validator = Validator::make($data, [
			'GoalId' 	=> 'required|max:50|min:4|alpha_num',
		]);

		return $validator;
	}
}