<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
	public function index()
    {
    	//return view( URL::route('test',['id'=>'2','test_id'=>'3']) );
    	return view('demo5.demo');

    }
}
