@extends('layouts.app')

@section('content')

<div class="wrapper">
    <div class="pet-index">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mascotas Registradas</h1>
                </div>
                <div class="col-lg-12">
                    <a type="submit" class="button1" href="pet/create">
                        <button type="button" class="btn btn-default btn-lg">Añadir Mascota</button>
                    </a>
                </div>
                @foreach ($pets as $pet)
                    <div class="pet-item col-lg-3 col-md-4 thumb">
                        <a class="thumbnail" href="/pet/{{$pet->id}}">
                            <img class="img-responsive pet-image" src="{{$pet->image}}" alt="">
                        </a>
                        <h4>{{$pet->name}}</h4>
                    </div>
                @endforeach
            </div>
    </div>
</div>

@endsection

