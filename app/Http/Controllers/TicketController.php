<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketUpdateRequest;
use Intervention\Image\Facades\Image;


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
        $ticket = Ticket::latest()->first();

        return view('tickets.create',compact('ticket'));
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


        $originalImage= $request->file('filename');
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/thumbnail/';
        $originalPath = public_path().'/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        $ticket= new Ticket();
        $ticket->filename=time().$originalImage->getClientOriginalName();
        $ticket->venue= $request->venue;
        $ticket->date= $request->date;
        $ticket->summary= $request->summary;
        $ticket->status= $request->status;
        $ticket->guest= $request->guest;
        $ticket->description= $request->description;
        $ticket->title= $request->title;
        $ticket->price= $request->price;






        $ticket->save();
        $this->validate($request, [
            'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'


        ]);

        return redirect()->route('tickets.index')->with('success', 'Your images has been successfully Upload');

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
        $ticket->description = request('description');
        $ticket->status = request('status');
        $ticket->venue = request('venue');

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
