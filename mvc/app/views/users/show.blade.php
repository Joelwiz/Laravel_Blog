@extends("layouts.main")

@section("content")
    <h1>Detalle del usuario <?php echo $user->id ?></h1>
        <ul>
            <li><strong>Nombre: </strong><?php echo $user->name ?></li>
            <li><strong>Apellidos: </strong><?php echo $user->surname ?></li>
            <li><strong>Email: </strong><?php echo $user->email ?></li>
            <li><strong>F. nacimiento: </strong><?php echo $user->birthdate->format('d-m-Y') ?></li>
        </ul>
    </div>
@stop