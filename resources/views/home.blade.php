@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a href="/pet">Mascotas Registradas</a>
                </div>
                <div class="panel-body">
                    <a href="/owners">Dueños de mascotas</a>
                </div>
                <div class="panel-body">
                    <a href="/vaccine">Lista de vacunas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
