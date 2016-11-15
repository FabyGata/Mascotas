@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading " align="center">Registrar Mascota</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('pet.store')}}" enctype="multipart/form-data" >
                            {{ csrf_field() }}



                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nombre de la Mascota</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('species') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Especie</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="species" value="{{ old('species') }}" required autofocus>

                                    @if ($errors->has('species'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('species') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Edad en años</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                                    @if ($errors->has('birthdate'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Peso en Kilogramos</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="weight" value="{{ old('weight') }}" required autofocus>

                                    @if ($errors->has('weight'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('race') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Raza</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="race" value="{{ old('race') }}" required autofocus>

                                    @if ($errors->has('race'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('race') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Género</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus>

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Color</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="color" value="{{ old('color') }}" required autofocus>

                                    @if ($errors->has('color'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('sterilized') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Esterilizado</label>


                                <label class="radio-inline">
                                    <input type="radio" name="sterilized" id="inlineRadio1" value="1"> Si
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sterilized" id="inlineRadio2" value="0"> No
                                </label>


                                <!--<div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="sterilized" value="{{ old('sterilized') }}" required autofocus>
                                </div>-->
                            </div>


                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

                                    <label for="name" type="text" class="col-md-4 control-label">Descripción Caracteristica</label>

                                    <div class="col-md-6">

                                       <!-- <input id="name" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>-->
                                        <textarea class="form-control" rows="4" name="description" value="{{ old('description')}}">
                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                        @endif
                                        </textarea>
                                    </div>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Seleccionar Dueño</label>
                                <div class="col-md-6">
                                    <select name="owner_id"  class="form-control">
                                        @foreach($owners as $owner)
                                            <option value={{ $owner->id}}>{{ $owner->name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Seleccionar Veterinario</label>
                                <div class="col-md-6">
                                    <select name="veterinary_id"  class="form-control">
                                        @foreach($veterinaries as $veterinary)
                                            <option value={{ $veterinary->id}}>{{ $veterinary->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-md-4 control-label">Fotografía</label>

                                <div class="col-md-6">
                                    <input type="file" name="image" />
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
