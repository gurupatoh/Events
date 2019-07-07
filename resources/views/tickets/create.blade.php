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
        <form action="" method="post"enctype="multipart/form-data">
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
                <label for="price">price:</label>
                <input type="text" id="price"name="price"required placeholder="price*"  class="form-control">
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
            <div class="container">



                <div class="panel panel-primary">

                    <div class="panel-heading"><h2>Upload Event image:</h2></div>

                    <div class="panel-body">



                        @if ($message = Session::get('success'))

                            <div class="alert alert-success alert-block">

                                <button type="button" class="close" data-dismiss="alert">×</button>

                                <strong>{{ $message }}</strong>

                            </div>

                            <img src="images/{{ Session::get('image') }}">

                        @endif



                        @if (count($errors) > 0)

                            <div class="alert alert-danger">

                                <strong>Whoops!</strong> There were some problems with your input.

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif



                        <form action="" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="row">



                                <div class="col-md-6">

                                    <input type="file" name="image" class="form-control">

                                </div>



                                <div class="col-md-6">

                                    <button type="submit" class="btn btn-success">Upload</button>

                                </div>



                            </div>

                        </form>



                    </div>

                </div>

            </div>

    <button class="btn btn-primary"type="submit" name="submit">Add</button>
            <a href="{{route('tickets.index')}}" class="btn btn-secondary " >Back</a>



        </form>
    </main>
    @endsection