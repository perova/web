@extends('layouts.app')

@section('content')
<div class="advert_head">
<h1>SKELBIMAI</h1>
<a href="{{ route('adverts.create')}}" class="btn btn-success">+ Sukurti nauja skelbima</a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th class="">Nuotrauka</th>
                        <th class="">ID</th>
                        <th class="">Data</th>
                        <th class="">Statusas</th>
                        <th class="">Nuoma / Pard.</th>
                        <th class="">Ob. tipas</th>
                        <th class="">Gyvenvietė</th>
                        <th class="">Mikror. / Gatvė</th>
                        <th class="">Kaina €</th>
                        <th class="">Brokeris</th>
                        <th></th>
                        <th></th>
                        <th></th>

                        
                    </tr>
                </thead>
                <tbody>
                  @foreach ($adverts as $advert)
                    <tr class="warning">
                        <td class="w100">img</td>
                        <td class="id">{{ $advert->id }}</td>
                        <td class="">{{ $advert->created_at }}</td>
                        <td class="">submited</td>
                        <td class="">{{ $advert->type}}</td>
                        <td class="">apartment/house</td>
                        <td class="">{{ $advert->settlement}}</td>
                        <td class="">none</td>
                        <td class="">{{ $advert->price}}</td>
                        <td class="">{{ $advert->broker }}</td>
                        <td><a href="{{ route('adverts.show', $advert->id) }}" class="btn btn-primary">More</a></td>
                        <td>

                            {!! Form::open ([ 'route'=>['adverts.destroy',$advert->id],'method'=>'delete']) !!}


                        {!! Form::submit('Delete',['class'=> 'btn btn-danger'])  !!}

                        {!! Form::close() !!}</td>
                        <td><a href="#" class="btn btn-primary">Viesinti</a></td>
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
  
  
    <div class="advert_head">
        {{ $adverts->links()}}
    </div>
  
@endsection
