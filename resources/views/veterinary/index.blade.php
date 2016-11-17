@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="col2 marg_right1">
            <h2>Veterinaria</h2>
            <div class="wrapper">

                @if (count($veterinaries) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>

                        <div class="panel-body">
                            <table class="table table-striped product-table">

                                <thead>
                                <th>Nombre de la Veterinaria</th>
                                <th>Dirección</th>
                                <th>Nombre del Médico</th>
                                <th>Teléfono</th>
                                </thead>

                                <tbody>
                                @foreach ($veterinaries as $veterinary)
                                    <tr>
                                        <td class="table-text">
                                            {{ $veterinary-> name }}
                                        </td>

                                        <td>
                                            {{ $veterinary->address}}
                                        </td>

                                        <td>
                                            {{ $veterinary->doctor_name}}
                                        </td>

                                        <td>
                                            {{ $veterinary->phone}}
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
                        <a type="submit" class="button1" href="veterinary/create">
                            <button type="button" class="btn btn-default btn-lg">Agregar Veterinaria</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

