<?php

namespace TeachMe\Http\Controllers;

use Illuminate\Http\Request;

use TeachMe\Entities\Ticket;
use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public function latest()
    {
    	//dd('latest');

        $tickets = Ticket::orderBy('created_at','DESC')->paginate(10);
        return view('tickets/list',compact('tickets'));
    }

     public function popular()
    {
    	//dd('popula
        return view('tickets/list',compact('tickets'));
    }

     public function open()
    {
    	//dd('open');
        $tickets = Ticket::orderBy('created_at','DESC')->paginate(10);
        return view('tickets/list',compact('tickets'));
    }

     public function closed()
    {
    	//dd('closed');
        $tickets = Ticket::orderBy('created_at','DESC')->paginate(10);
        return view('tickets/list',compact('tickets'));
    }

     public function details($id)
    {

        $ticket = Ticket::findOrFail($id);
    	//dd('details: '.$id);
        return view('tickets/details', compact('ticket'));
    }


}
