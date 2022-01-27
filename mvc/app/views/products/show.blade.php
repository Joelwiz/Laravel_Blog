@extends("layouts.main")

@section("content")
    <h1>Detalle del producto {{$data->id}} </h1>
        <ul>
            <li><strong>Nombre: </strong> {{$data->name}} </li>
            <li><strong>tipo: </strong> {{$data->type_id}} </li>
            <li><strong>precio: </strong> {{$data->price}} </li>

        </ul>
    </div>
@stop