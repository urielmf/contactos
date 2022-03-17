@extends('master')
@section('title', 'Crear contacto')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-6" style="background-color: white; border-radius:5px; padding: 30px">
                <h1>Crear contacto</h1>

                <form method="POST" action="{{ route('contacts.store') }}">
                    @csrf

                    <div class="form-group">
                        <input class="form-control" type="text" name="nombre" value="{{ old('title') }}"
                            placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="apellido_p" value="{{ old('apellido_m') }}"
                            placeholder="Apeliido Paterno" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="apellido_m" value="{{ old('apellido_m') }}"
                            placeholder="Apeliido Materno" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento->format("Y-m-d")')}}" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="direccion" value="{{ old('direccion') }}"
                            placeholder="Dirección Completa" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="telefono" value="{{ old('telefono') }}"
                            placeholder="Teléfono Fijo" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="celular" value="{{ old('celular') }}"
                            placeholder="Teléfono Celular" required>
                    </div>
                    <br>
                    <div class="form-group" style="display: flex">
                        <p><button type="submit" class="btn btn-primary btn-md mr-2">Crear contacto</button></p>

                        <p><a href="{{ route('contacts.index') }}" class="btn btn-primary">Regresar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
