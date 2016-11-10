@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="col2 marg_right1">
            <h2>Mascotas Registradas</h2>
            <div class="wrapper">

                @if (count($pets) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>

            <div class="panel-body">
                <table class="table table-striped product-table">

                    <thead>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Genero</th>
                    <th>Color</th>
                    <th>Fotografía</th>
                    </thead>

                    <tbody>
                    @foreach ($pets as $pet)
                        <tr>
                            <td class="table-text" >
                                <a href="/pet/{{$pet->id}}">{{ $pet-> name }}</a>
                            </td>

                            <td>
                                {{ $pet->race}}
                            </td>

                            <td>
                                {{ $pet->gender}}
                            </td>

                            <td>
                                {{ $pet->color}}
                            </td>

                            <td>
                                <img style="width: 200px" src="{{$pet->image}}">

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

            <div class="form-group">
                <div class="col-sm-6">
                    <a type="submit" class="button1" href="pet/create">
                        Añadir Mascota
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

