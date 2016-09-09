<?php

namespace TeachMe\Http\Controllers;

use Illuminate\Http\Request;

use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public function latest()
    {
    	//dd('latest');
        return view('tickets/list');
    }

     public function popular()
    {
    	//dd('popular');
        return view('tickets/list');
    }

     public function open()
    {
    	//dd('open');
        return view('tickets/list');
    }

     public function closed()
    {
    	//dd('closed');
        return view('tickets/list');
    }

     public function details($id)
    {
    	//dd('details: '.$id);
        return view('tickets/details');
    }


}
