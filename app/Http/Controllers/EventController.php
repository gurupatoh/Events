<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class EventController extends Controller
{
    public function index(Ticket $ticket)
    {
        {

            $ticket = DB::table('tickets')->select('id', 'title', 'guest', 'date', 'venue')->paginate(4);
            return view('event.index', compact('ticket'))->with('tickets', $ticket);
        }}

        public function show(Ticket $ticket){
            return view('event.show', compact('ticket'))->with('tickets', $ticket);
    }}