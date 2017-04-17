@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Session::has('empty'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <strong>Sorry!</strong>{{ Session::get('empty')}}
            </div>
        @endif
        <div class="jumbotron">
            <form class="form-inline" action="{{route('search')}}" method="GET">
                {{--{{csrf_field()}}--}}
                {{--<div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" id="name" class="form-control" placeholder="Enter student's name">
                </div>--}}

                <div class="form-group">
                    <label for="month">Month</label>
                    <div class="form-group">
                        <select id="month" name="month" class="form-control">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">View</button>
            </form>
        </div>
            <a href="{{route('week')}}" class="btn btn-warning">Birthdays Of the Week</a>
    </div>
@stop
