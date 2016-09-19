<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::post('register', [
	'uses' 	=> 'UserController@postCreateUserAccount',
	'as' 	=> 'register'
]);

Route::post('login', [
	'uses' 	=> 'UserController@postLoginUser',
	'as' 	=> 'login'
]);

Route::get('user', [
	'uses' 	=> 'UserController@getUser',
	'as' 	=> 'login'
]);

Route::post('user/update', [
	'uses' 	=> 'UserController@postUpdateUser',
	'as' 	=> 'user.update'
]);

Route::post('user/update', [
	'uses' 	=> 'UserController@postUpdateUser',
	'as' 	=> 'user.update'
]);

Route::get('user/goals', [
	'uses' 	=> 'GoalController@getAllGoals',
	'as' 	=> 'user.update'
]);

Route::post('goal/create', [
	'uses' 	=> 'GoalController@postCreateGoal',
	'as' 	=> 'goal.update'
]);

Route::post('goal/update', [
	'uses' 	=> 'GoalController@postUpdateGoal',
	'as' 	=> 'goal.update'
]);

Route::post('goal/delete', [
	'uses' 	=> 'GoalController@postDeleteGoal',
	'as' 	=> 'goal.delete'
]);

Route::get('goal/{id}', [
	'uses' 	=> 'GoalController@getGoal',
	'as' 	=> 'goal.{id}'
]);

Route::post('payment/add_details', [
	'uses' 	=> 'PaymentController@postAddPaymentDetails',
	'as' 	=> 'goal.delete'
]);



