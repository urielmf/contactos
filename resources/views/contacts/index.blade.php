@extends('master')
@section('title', 'Contactos')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Contactos Personales</h1>
                <a href="{{ route('contacts.create') }}" class="btn btn-success btn-sm">Crear Contacto</a>
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido P</th>
                            <th>Apellido M</th>
                            <th>Fecha Nacim</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>celular</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->nombre }}</td>
                                <td>{{ $contact->apellido_p }}</td>
                                <td>{{ $contact->apellido_m }}</td>
                                <td>{{ $contact->fecha_nacimiento->format('d-m-Y') }}</td>
                                <td>{{ $contact->direccion }}</td>
                                <td>{{ $contact->telefono }}</td>
                                <td>{{ $contact->celular }}</td>
                                <td>
                                    <a href="{{ route('contacts.edit', ['contact' => $contact->id]) }}"
                                        class="btn btn-info btn-sm">Editar</a>
                                    <!--form action="{{ route('contacts.destroy', [$contact->id]) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                        </form-->
                                    <a href="javascript:enviar_formulario({{ $contact->id }})"
                                        class="btn btn-danger btn-sm">borrar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <form action="{{ route('contacts2.destroy') }}" method="POST" id="formulario1" name="formulario1">
        @csrf
        @method('DELETE')
        <input type="hidden" value="" id="mi_contacto" name="mi_contacto">
    </form>
    <script>
        function enviar_formulario(mi_contacto) {
            var contacto = document.getElementById("mi_contacto").value = mi_contacto;
            Swal.fire({
                title: 'Estas seguro de borrar el contacto?',
                text: "Esto no se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'Cancelar!',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.formulario1.submit();
                }
            })

        }
    </script>
@endsection
