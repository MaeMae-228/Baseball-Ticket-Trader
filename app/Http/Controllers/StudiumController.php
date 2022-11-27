<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Studium;

class StudiumController extends Controller
{
    public function index(Studium $studium)
    {
        return view('tickets/search')->with(['studiums' => $studium->get()]);
    }
    //
}
