<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ticket;

class TicketController extends Controller
{
    public function index(Ticket $ticket)
    {
        return view('tickets/index')->with(['tickets' => $ticket->get()]);
    }
    //
}
