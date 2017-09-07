@extends('layouts.app')

@section('content')

<ul class="list-group">
  <li class="list-group-item active">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>



<h1>Skelbimas</h1>
<p>{{$advert->id}}</p>

<p> {{$advert->type}}</p>

<p> {{$advert->street}}</p>

<p> {{$advert->price}}</p>

<p> {{$advert->broker}}</p>

<a href="{{route('adverts.edit',$advert->id)}}" class="btn btn-primary"> Edit </a>


@endsection


