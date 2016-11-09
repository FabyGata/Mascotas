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

                            <div class="col-md-6">
                                <select name="vaccine_id"  class="form-control">
                                    @foreach($vaccines as $vaccine)
                                        <option value={{ $vaccine->id}}>{{ $vaccine->name}}</option>
                                    @endforeach
                                </select>
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
