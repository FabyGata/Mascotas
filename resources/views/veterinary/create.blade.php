@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrar Veterinaria</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('veterinary.store')}}">
                            {{ csrf_field() }}



                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre de la veterinaria</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Dirección</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('doctor_name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre del doctor</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="doctor_name" value="{{ old('doctor_name') }}" required autofocus>

                                    @if ($errors->has('doctor_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('doctor_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Teléfono</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Añadir Veterinaria
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
