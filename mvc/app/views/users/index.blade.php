@extends("layouts.main")

@section("content")
    <h1>Lista de usuarios</h1>
    <p>
        <a href="/user/create" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
        <a href="/user/pdf" class="btn btn-primary"><i class="far fa-file-pdf"></i> PDF</a>
    </p>
    <table class="table table-striped table-hover table-sm">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>F. nacimiento</th>
            <th></th>
        </tr>

        @foreach($users as $key => $user)
            <tr>
                <td><?php echo $user->name ?></td>
                <td><?php echo $user->surname ?></td>
                <td><?php echo $user->email ?></td>
                <td><?php echo $user->birthdate ? $user->birthdate->format('d-m-Y') : 'nonato' ?></td>
                <td>
                    <a href="/user/show/{{ $user->id }}" class="btn btn-primary"><i class="fas fa-eye"></i> Ver </a>
                    <a href="/user/edit/{{ $user->id }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Editar </a>
                    <a href="/user/delete/{{ $user->id }}" class="btn btn-danger"><i class="far fa-trash-alt"></i>Borrar </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@stop