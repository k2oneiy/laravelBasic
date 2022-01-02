
@extends('layouts.home')

@section('title','laraval-Home')


@section('page-title','This is a Home page')


@section('content')
<br><br>
    <h5>{{$ti}}</h5>
    @if ($number_of_users==0)
        we have no users
    @elseif ($number_of_users==1)
        we have one user
    @else
        we have many user
    @endif
    <br>
    @unless ($user_online)
        user is offline
    @endunless

    @isset($user_settings)
        settings
    @endisset


    @for ($i=1;$i<=10;$i++)
        number is {{$i}}
        <br>
    @endfor

    @foreach ($name as $names)
        {{$names['name']}}

    @endforeach


@stop
