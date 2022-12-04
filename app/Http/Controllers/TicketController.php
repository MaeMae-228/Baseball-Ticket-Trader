<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;

class TicketController extends Controller
{
    //public function index(Request $request)
    //{
        //return view('tickets/index')->with(['requests' => $request->get()]);
    //}
    public function index(Request $request){
        dd($request);
}
}
