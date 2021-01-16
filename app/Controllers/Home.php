<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}

	public function help()
	{
		return view('welcome_message');
	}

	public function success()
	{
		return view('valid_page');
	}

	public function second_sucess()
	{
		return view('second_valid_page');
	}

	//--------------------------------------------------------------------

}
