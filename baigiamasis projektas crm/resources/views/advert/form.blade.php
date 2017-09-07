@extends('layouts.app')


@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">

	<h1>SKELBIMAI</h1>

		@if (isset($advert))
		{!! Form::model($advert, ['route'=>['adverts.update',$advert->id], 'method'=>'put']) !!}
		@else
		{!! Form::open(['route'=>'adverts.store', 'method'=>'post']) !!}
		@endif

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div class="form-group">
			Tipas:{!! Form::select('type', ['Nuoma' => 'Nuoma', 'Parduodama' => 'Parduodama']) !!}
		</div>
		<div class="form-group">
			{!! Form::text('settlement', null, ['class' => 'form-control', 'placeholder' => 'Mikrorajonas']) !!}
		</div>
		<div class="form-group">
			{!! Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Gatve']) !!}
		</div>
		<div class="form-group">
			{!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Kaina']) !!}
		</div>
		<div class="form-group">
			{!! Form::text('broker', null, ['class' => 'form-control', 'placeholder' => 'Brokeris']) !!}
		</div>

		{!! Form::submit('Issaugoti', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
</div>

@endsection
