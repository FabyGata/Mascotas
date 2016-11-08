@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Añadir Vacuna</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('vaccine.store')}}">
                            {{ csrf_field() }}



                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre de la vacuna</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group{{ $errors->has('dose') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Dosis</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="dose" value="{{ old('dose') }}" required autofocus>

                                    @if ($errors->has('dose'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('dose') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Laboratorio</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="brand" value="{{ old('brand') }}" required autofocus>

                                    @if ($errors->has('brand'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Añadir
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
