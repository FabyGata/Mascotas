@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="col2 marg_right1">
            <h2>Lista de Vacunas</h2>
            <div class="wrapper">

                @if (count($vaccines) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>

                        <div class="panel-body">
                            <table class="table table-striped product-table">

                                <thead>
                                <th>Nombre de la Vacuna</th>
                                <th>Dosis</th>
                                <th>Fecha de la Primera Vacuna</th>
                                </thead>

                                <tbody>
                                @foreach ($vaccines as $vaccine)
                                    <tr>
                                        <td class="table-text">
                                            {{ $vaccine-> name }}
                                        </td>

                                        <td>
                                            {{ $vaccine->dose}}
                                        </td>

                                        <td>
                                            {{ $vaccine->date_first_vaccine}}
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
                        <a type="submit" class="button1" href="vaccine/create">
                            Añadir Vacuna
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

