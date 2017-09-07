@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
<h1>Naudotojai</h1>
    @if (isset($user))
    {!! Form::model($user, ['route'=>['users.update',$user->id], 'method'=>'put']) !!}
    @else
    {!! Form::open(['route'=>'users.store', 'method'=>'post']) !!}
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
            Tipas:{!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Vardas']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('surname', null, ['class' => 'form-control', 'placeholder' => 'Pavarde']) !!}
        </div>
        <div class="form-group">
            {!! Form::date('birthday', null, ['class' => 'form-control', 'placeholder' => 'Gim.Data']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telef.']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'El.pastas']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Slaptazodis']) !!}
        </div>
        {!! Form::submit('Issaugoti', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection
