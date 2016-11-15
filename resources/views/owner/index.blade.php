@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="col2 marg_right1">
            <h2>Dueños</h2>
            <div class="wrapper">

                @if (count($owners) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>

                        <div class="panel-body">
                            <table class="table table-striped product-table">

                                <thead>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Edad</th>
                                </thead>

                                <tbody>
                                @foreach ($owners as $owner)
                                    <tr>
                                        <td class="table-text">
                                            {{ $owner-> name }}
                                        </td>

                                        <td>
                                            {{ $owner->address}}
                                        </td>

                                        <td>
                                            {{ $owner->birthdate}}
                                        </td>

                                        <td class="table-text">
                                            {{ $owner-> ci }}
                                        </td>

                                        <td class="table-text">
                                            {{ $owner-> phone }}
                                        </td>

                                        <td class="table-text">
                                            {{ $owner-> email }}
                                        </td>

                                        <td class="table-text">
                                            {{ $owner-> housetype }}
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

                <div class="form-group">
                    <div class="col-lg-12">
                        <a type="submit" class="button1" href="owner/create">
                            <button type="button" class="btn btn-default btn-lg">Agregar Dueño</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

