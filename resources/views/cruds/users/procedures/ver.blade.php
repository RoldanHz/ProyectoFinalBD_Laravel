@extends('Cruds.users.index')

@section('contentusers')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>Lista de Usuarios</h3>
            <br>
            <a href="cruds" class="btn btn-primary">Regresar</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createuserinfo">
                Nuevo Usuario
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class ="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre de Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Status</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="">
                                <td scope="row">{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->status }}</td>
                                <td>{{ $user->profile }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edituser{{$user->id}}"> Editar </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteuser{{$user->id}}"> Eliminar </button>
                                </td>
                            </tr>
                            @include('Cruds.users.procedures.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('Cruds.users.procedures.create')

        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
