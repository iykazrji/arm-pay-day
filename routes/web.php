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

// Route::get('/', function () {
// 	return view('welcome');
// });

Route::get('/', [
	'uses' 	=> 'PaymentController@payment',
	'as' 	=> '/'
]);

Route::post('register', [
	'uses' 	=> 'UserController@postCreateUserAccount',
	'as' 	=> 'register'
]);

Route::post('login', [
	'uses' 	=> 'UserController@postLoginUser',
	'as' 	=> 'login'
]);

Route::get('login', [
	'uses' 	=> 'UserController@postLoginUser',
	'as' 	=> 'login'
]);

Route::get('user/{userId}', [
	'uses' 	=> 'UserController@getUser',
	'as' 	=> 'user.fetch'
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

Route::get('user/{id}/balance', [
	'uses' 	=> 'TransactionController@currentBalance',
	'as' 	=> 'user.update'
]);

Route::post('user/transaction/history', [
	'uses' 	=> 'TransactionController@getTransactionHistory',
	'as' 	=> 'user.update'
]);

Route::get('user/{id}/last_credit', [
	'uses' 	=> 'TransactionController@getLastCredit',
	'as' 	=> 'user.update'
]);

Route::get('user/{id}/redemption', [
	'uses' 	=> 'TransactionController@getLastRedemption',
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

Route::post('payment/update', [
	'uses' 	=> 'PaymentController@updatePayment',
	'as' 	=> 'goal.delete'
]);

Route::get('payment/{id}', [
	'uses' 	=> 'PaymentController@getPaymentDetail',
	'as' 	=> 'goal.delete'
]);

Route::post('transaction/create', [
	'uses' 	=> 'TransactionController@addTransaction',
	'as' 	=> 'transaction.create'
]);

