@extends('layouts.main')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tickets</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>|
        </div>
        <!--form-->
        <form action="" method="post">
            {{csrf_field()}}
<div class="form-group">
    <label for="title">Event title:</label>
    <input type="text" id="title"name="title" required placeholder="title*" class="form-control">
    </div>
        <div class="form-group">
            <label for="summary">summary:</label>
            <input type="text" id="summary"name="summary" required placeholder="summary*" class="form-control">
            </div><div class="form-group">
                    <label for="date">date:</label>
                    <input type="datetime-local" id="date"name="date" required placeholder="date*" class="form-control">
                    </div><div class="form-group">
                            <label for="venue">venue:</label>
                            <input type="text" id="venue"name="venue" required placeholder="venue*" class="form-control">
                            </div>
            <div class="form-group">
                <label for="guest">guest:</label>
                <input type="text" id="guest"name="guest"required placeholder="guest*"  class="form-control">
            </div>
                                <div class="form-group">
    <label for="description">description:</label>
    <input type="text" id="description"name="description"required placeholder="description*"  class="form-control">
        </div>
        <div class="form-group">
            <label for="status">status:</label>
            <select class="form-control" id="status"name="status" >
                <option value="open">open</option>
                <option value="Active">Active</option>
                <option value="Closed">Closed</option>

            </select>
        </div>


    <button class="btn btn-primary"type="submit" name="submit">Add</button>
            <a href="{{route('tickets.index')}}" class="btn btn-secondary " >Back</a>



        </form>
    </main>
    @endsection