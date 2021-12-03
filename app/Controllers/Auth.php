<?php
 namespace App\Controllers;


class Auth extends BaseController
{
	public function index()
	{
		return view('admin/pages/login');
	}

  public function register()
	{
		return view('admin/pages/register');
	}

	//--------------------------------------------------------------------

}
