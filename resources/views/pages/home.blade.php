@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h2>Welcome To Lucid Birthday Search Application</h2>
            <p>Click button below to view birthdays</p>
            <p><a class="btn btn-primary btn-lg" role="button" href="{{route('view')}}">Birthdays</a></p>
        </div>

        @foreach($birthdays as $birthday)
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <strong>Birthday!!!</strong> {{$birthday->name}}'s birthday is today
            </div>
        @endforeach

    </div>
@stop
