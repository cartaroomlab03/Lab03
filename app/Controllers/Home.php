<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		return view('welcome_message');
	}

	public function mate1()
    {
        return view('mate1');
    }
	//--------------------------------------------------------------------

}
