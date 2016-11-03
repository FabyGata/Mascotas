@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registrar Mascota</div>
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
