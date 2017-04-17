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
                <tr class="btn-info">
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Day</th>
                    <th>Level</th>
                </tr>
                </thead>
                <?php $sn = 0; ?>
                @foreach($birthdays as $birthday)
                    <tbody>
                    <tr>
                        <th>{{++$sn}}</th>
                        <th>{{$birthday->name}}</th>
                        <th>{{$birthday->month}}</th>
                        <th>{{$birthday->day}}</th>
                        <th>{{$birthday->level}}</th>
                    </tr>
                    </tbody>
                @endforeach
            </table>
            {{ $birthdays->appends(['month'=>request('month')])->links() }}
        </div>
    </div>
@stop