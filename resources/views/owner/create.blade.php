@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrar Dueño</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('owner.store')}}">
                            {{ csrf_field() }}



                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre del dueño</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Dirección</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="adress" value="{{ old('adress') }}" required autofocus>

                                    @if ($errors->has('adress'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Edad</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                                    @if ($errors->has('birthdate'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar Dueño
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
