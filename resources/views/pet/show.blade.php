@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="row">
            <div class="col-md-5 pet-photo">
                <img src="{{$pet->image}}"><br>
            </div>
            <div class="col-md-7 pet-info">
                <div class="form-inline">
                    <label>Nombre de la mascota: </label> {{ $pet-> name }}
                </div >
                <div class="form-inline">
                    <label>Especie: </label> {{ $pet-> species }}
                </div>
                <div class="form-inline">
                    <label>Raza: </label> {{ $pet-> race }}
                </div>
                <div class="form-inline">
                    <label>Edad: </label> {{ $pet-> birthdate }}
                </div>
                <div class="form-inline">
                    <label>Peso en Kg: </label> {{ $pet-> weight }}
                </div>
                <div class="form-inline">
                    <label>Género: </label> {{ $pet-> gender }}
                </div>
                <div class="form-inline">
                    <label>Color: </label> {{ $pet-> color }}
                </div>
                <div class="form-inline">
                    <label>Esterilizado: </label>
                    @if($pet->sterilized)
                        Sí
                    @else
                        No
                    @endif
                </div>
                <div class="form-inline">
                    <label>Descripción: </label> {{ $pet-> description }}
                </div>
                <div class="form-inline">
                    <label>Nombre del dueño: </label> {{ $pet->owner->name }}
                </div>
                <div class="form-inline">
                    <label>Veterinaria a la que suele ir la mascota: </label> {{ $pet->veterinary->name }}
                </div>
                <div class="form-inline">
                    <table class="table table-striped product-table">
                    <thead>
                    <th>Lista de Vacunas</th>
                    </thead>
                    <tbody>
                        @foreach ($pet->vaccines as $vaccine)
                        <tr>
                            <td class="table-text">
                                {{$vaccine-> name }}
                            </td>
                            <td class="table-text">
                                {{$vaccine-> dose }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                 <div class="col-lg-12">
                         <a type="submit" class="button1" href="/print_pet_certificate?pet_id={{$pet->id}}">
                             <button type="button" class="btn btn-default btn-lg">Imprimir Certificado</button>
                         </a>
                 </div>
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