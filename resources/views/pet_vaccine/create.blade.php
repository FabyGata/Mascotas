@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pet_vaccine V:</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('pet_vaccine.store')}}" enctype="multipart/form-data" >
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Seleccionar Vacuna</label>
                                <div class="col-md-6">
                                    <select name="vaccine_id"  class="form-control">
                                        @foreach($vaccines as $vaccine)
                                            <option value={{ $vaccine->id}}>{{ $vaccine->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Seleccionar Masacota</label>
                                <div class="col-md-6">
                                    <select name="pet_id"  class="form-control">
                                        @foreach($pets as $pet)
                                            <option value={{ $pet->id}}>{{ $pet->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
