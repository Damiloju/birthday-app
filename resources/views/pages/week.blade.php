@extends('layouts.app')

@section('header')
    <style type="text/css">
        body{
            background-color:white;
            font-family: Fira Code;
        }
    </style>
@stop

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <a href="{{route('view')}}"><h1 style="margin-top: 0px;">Birthdays For This Week</h1></a>
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Day</th>
                    <th>Level</th>
                </tr>
                </thead>
                <?php $sn = 0; ?>

            </table>
            {{--{{ ->appends(['month'=>request('month')])->links() }}--}}
        </div>
    </div>
@stop