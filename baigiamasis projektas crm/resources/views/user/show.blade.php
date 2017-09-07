@extends('layouts.app')

@section('content')


<p>{{$user->id}}</p>

<p> {{$user->name}}</p>

<p> {{$user->surname}}</p>

<p> {{$user->birthday}}</p>

<p> {{$user->phone}}</p>

<p> {{$user->email}}</p>

<a href="{{route('users.edit',$user->id)}}" class="btn btn-primary"> Edit </a>

@endsection


