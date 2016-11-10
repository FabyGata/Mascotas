@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="col2 marg_right1">

            <address>
                <strong>Nombre de la Mascota</strong><br>
                {{ $pet-> name }}<br>
            </address>
            <address>
                <strong>Especie</strong><br>
                {{ $pet-> species }}<br>
            </address>
            <address>
                <strong>Raza</strong><br>
                {{ $pet-> race }}<br>
            </address>
            <address>
                <strong>Edad</strong><br>
                {{ $pet-> birthdate }}<br>
            </address>
            <address>
                <strong>Peso</strong><br>
                {{ $pet-> weight }}<br>
            </address>
            <address>
                <strong>Genero</strong><br>
                {{ $pet-> gender }}<br>
            </address>
            <address>
                <strong>Color</strong><br>
                {{ $pet-> color }}<br>
            </address>
            <address>
                <strong>Esterilizacion</strong><br>
                {{ $pet-> sterilized }}<br>
            </address>
            <address>
                <strong>Descripcion</strong><br>
                {{ $pet-> description }}<br>
            </address>

            <address>
                <strong>Nombre del dueño</strong><br>
                {{ $pet->owner->name }}<br>
            </address>

            <address>
                <strong>Veterinaria a la que suele ir la mascota</strong><br>
                {{ $pet-> veterinary->name}}<br>
            </address>
            <address>
                <strong>Imagen</strong><br>
                <img style="width: 200px" src="{{$pet->image}}"><br>
            </address>

        </div>
        </div>
    </div>


<div class="form-group">
    <div class="col-sm-6">
        <a type="submit" class="button1" href="vaccine_create">
            Añadir Vacuna
        </a>
    </div>
</div>

@endsection