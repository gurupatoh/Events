@extends('layouts.main')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Delete Ticket:{{$ticket->id}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>
        <!--form-->
        <form action=" " method="post">
            {{csrf_field()}}
<div class="form-group">
    <label for="title">title:</label>
    <input type="text" id="title"name="title" class="form-control"value="{{$ticket->title}}"disabled>
    <div>
        <label for="summary">summary:</label>
        <input type="text" id="summary"name="summary" class="form-control"value="{{$ticket->summary}}"disabled>
        <div><label for="date">date:</label>
            <input type="datetime-local" id="date"name="date" class="form-control"value="{{$ticket->date}}"disabled>
            <div><label for="venue">venue:</label>
                <input type="text" id="venue"name="venue" class="form-control"value="{{$ticket->venue}}"disabled>
                <div>
                    <div class="form-group">
                        <label for="guest">guest:</label>
                        <input type="text" id="guest"name="guest" class="form-control"value="{{$ticket->guest}}"disabled>
                    </div>
                    <div class="form-group">
                        <label for="price">price:</label>
                        <input type="text" id="guest"name="guest" class="form-control"value="{{$ticket->price}}"disabled>
                    </div>
                    <div class="form-group">
    <label for="summary">description:</label>
    <input type="text" id="description"name="description" class="form-control"value="{{$ticket->description}}"disabled>
        </div>
        <div class="form-group">
            <label for="status">status:</label>
    <input type="text" id="status"name="status" class="form-control"value="{{$ticket->status}}"disabled>
        </div>

</div>
</div>
    <button class="btn btn-danger"type="submit" name="submit">Delete</button>
            <a href="{{route('tickets.index')}}" class="btn btn-secondary " >Back</a>



        </form>
    </main>
    @endsection