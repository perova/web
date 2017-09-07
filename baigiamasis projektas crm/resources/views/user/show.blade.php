@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
		<ul class="list-group">
		    <li class="list-group-item active">VARTOTOJAS</li>
		  <li class="list-group-item">ID: {{$user->id}}</li>
		  <li class="list-group-item">Vardas: {{$user->name}}</li>
		  <li class="list-group-item">Pavarde: {{$user->surname}}</li>
		  <li class="list-group-item">Gim.data: {{$user->birthday}}</li>
		  <li class="list-group-item">Tel: {{$user->phone}}</li>
		  <li class="list-group-item"><p>El.pastas {{$user->email}}</p></li>
		</ul>

	
	<a href="{{route('users.edit',$user->id)}}" class="btn btn-primary"> Edit </a>
	</div>
</div>
@endsection


