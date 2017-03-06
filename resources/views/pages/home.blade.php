@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h2>Welcome To Lucid Birthday Search Application</h2>
            <p>Click button below to view birthdays</p>
            <p><a class="btn btn-primary btn-lg" role="button" href="{{route('view')}}">Birthdays</a></p>
        </div>
    </div>
@stop
