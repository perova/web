@extends('layouts.app')

@section('content')
<a href="{{ route('users.create')}}" class="btn btn-success">Create</a>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th class="">Img</th>
                        <th class="">Id</th>
                        <th class="">Vardas</th>
                        <th class="">Pavarde</th>
                        <th class="">Gim.data</th>
                        <th class="">Tel</th>
                        <th class="">El.pastas</th>
                        <th class="">Kada sukurta</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr class="warning">
                        <td class="w100">img</td>
                        <td class="id">{{ $user->id }}</td>
                        <td class="">{{ $user->name }}</td>
                        <td class="">{{ $user->surname}}</td>
                        <td class="">{{ $user->birthday}}</td>
                        <td class="">{{ $user->phone }}</td>
                        <td class="">{{ $user->email}}</td>
                        <td class="">{{ $user->created_at }}</td>
                        <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">More</a></td>
                        <td>

                            {!! Form::open ([ 'route'=>['users.destroy',$user->id],'method'=>'delete']) !!}


                        {!! Form::submit('Delete',['class'=> 'btn btn-danger'])  !!}

                        {!! Form::close() !!}</td>
                    </tr>
                   @endforeach 
                </tbody>
            </table>
        </div>

                <!-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
            
    </div>
</div>
{{ $users->links()}}
@endsection
