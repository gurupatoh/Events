
@extends('layouts.main')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Events</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>


        <div class="table-responsive">
            <a class="btn btn-primary" href="/tickets/create" >Add Event+</a>


            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>Ticket</th>
                    <th>Event Title</th>
                    <th>summary</th>
                    <th>status</th>
                    <th>Actions</th>

                </tr>
                </thead>
                <tbody>

                @foreach($tickets as $ticket)
                <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->title}}</td>
                    <td>{{$ticket->summary}}</td>
                    <td>{{$ticket->status}}</td>
                    <td><a href="/tickets/{{$ticket->id}}" class="btn btn-primary">Update</a></td>
                    <td><a href="/tickets/delete/{{$ticket->id}}" class="btn btn-danger">Delete</a></td>




                </tr>

                @endforeach


                </tbody>
            </table>
            {{$tickets->links()}}
        </div>
    </main>
    @endsection