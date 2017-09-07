@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <ul class="list-group">
        <li class="list-group-item active">SKELBIMAS</li>
      <li class="list-group-item">ID: {{$advert->id}}</li>
      <li class="list-group-item">Tipas: {{$advert->type}}</li>
      <li class="list-group-item">Gatve: {{$advert->street}}</li>
      <li class="list-group-item">Kaina: {{$advert->price}}</li>
      <li class="list-group-item">Brokeris: {{$advert->broker}}</li>
    </ul>

    <a href="{{route('adverts.edit',$advert->id)}}" class="btn btn-primary"> Edit </a>
    </div>
</div>

@endsection


