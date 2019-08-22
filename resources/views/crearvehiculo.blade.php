@extends('app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Vehiculo') }}</div>

                    <div class="card-body">

                        <ul>
                            @if ($errors->any())
                                <div class ="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif

                        </ul>
                        <form method="POST" action="{{url('/registrar')}}">

                            @csrf







                            <div class="form-group row">
                                <label for="placa" class="col-md-4 col-form-label text-md-right">{{ __('placa') }}</label>

                                <div class="col-md-6">
                                    <input name="placao" id="placa" type="text" value="{{ old('placa') }}" >

                                </div>
                            </div>

                            <br>

                            <div class="form-group row">
                                <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('marca') }}</label>

                                <div class="col-md-6">
                                    <input name="marca" id="marca" type="text" value="{{ old('marca') }}" >

                                </div>
                            </div>

                            <br>


                            <div class="form-group row">
                                <label for="cedula" class="col-md-4 col-form-label text-md-right">{{ __('cedula') }}</label>

                                <div class="col-md-6">
                                    <input name="cedula" id="cedula" type="number" value="{{ old('cedula') }}" >

                                </div>
                            </div>

                            <br>



                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('nombre') }}</label>

                                <div class="col-md-6">
                                    <input name="nombre" id="nombre" type="nombre" value="{{ old('nombre') }}" >

                                </div>
                            </div>

                            <br>




                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection