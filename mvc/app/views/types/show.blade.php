@extends("layouts.main")

@section("content")
    <h1>Detalle del producto {{$data->id}} </h1>
        <ul>
            <li><strong>Nombre: </strong> {{$data->name}} </li>

        </ul>
    </div>
@stop