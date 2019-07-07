<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketUpdateRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::latest()->paginate(5);
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    public function delete(Ticket $ticket)
    {
        return view('tickets.delete', compact('ticket'));
    }


    /**te
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ticket::create([
            'summary' => request('summary'),
            'title' => request('title'),
            'venue' => request('venue'),
            'guest' => request('guest'),
            'price' => request('price'),
            'image' => request('image'),


            'date' => request('date'),
            'description' => request('description'),
            'status' => request('status')]);
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();


        request()->image->move(public_path('images'), $imageName);
        return redirect()->route('tickets.index')   ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }

    /**php
     * Display the specified resource.
     *
     * @param \App\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(TicketUpdateRequest $request, Ticket $ticket)
    {    //helper function request
        $ticket->summary = request('summary');
        $ticket->title = request('title');
        $ticket->date = request('date');
        $ticket->venue = request('venue');
        $ticket->description = request('description');
        $ticket->status = request('status');
        $ticket->save();

        return redirect()->route('tickets.index')->withSuccess('Ticket has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->withSuccess('Ticket has been deleted');
    }
}
