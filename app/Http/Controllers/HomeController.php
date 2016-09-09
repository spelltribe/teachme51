<?php

namespace TeachMe\Http\Controllers;

use Illuminate\Http\Request;

use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index() {

    	return view('home');
    }
}
