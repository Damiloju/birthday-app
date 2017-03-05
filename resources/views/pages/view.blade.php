@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <form class="form-inline" action="search" method="POST">
                {{csrf_field()}}
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
    </div>
@stop