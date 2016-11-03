<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PageController extends Controller
{

	// public function __construct()
	// {
	//     $this->middleware('auth')->except(['getLoginPage', 'getRegisterPage']);
	// }

	public function getDashboardPage()
	{
		return view('pages.index');
	}
	
	public function getLoginPage()
	{
		return view('pages.login');
	}

	public function getRegisterPage()
	{
		return view('pages.register');
	}
}
