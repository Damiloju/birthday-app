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
                <a href="{{route('view')}}"><h1 style="margin-top: 0px;">Results</h1></a>
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
                @foreach($records as $record)
                    <tbody>
                    <tr>
                        <th>{{++$sn}}</th>
                        <th>{{$record->name}}</th>
                        <th>{{$record->month}}</th>
                        <th>{{$record->day}}</th>
                        <th>{{$record->level}}</th>
                    </tr>
                    </tbody>
                @endforeach
            </table>
            {{ $records->appends(['month'=>request('month')])->links() }}
        </div>
    </div>
@stop