@extends("layouts.main")

@section("content")
    <h1>Lista de productos</h1>
    <p>
        <a href="/type/create" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nuevo</a>
        <a href="/type/pdf" class="btn btn-primary"><i class="far fa-file-pdf"></i> PDF</a>
    </p>
    <table class="table table-striped table-hover table-sm">
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th></th>
        </tr>

        @foreach($data as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>
                    <a href="/type/show/{{ $value->id }}" class="btn btn-primary"><i class="fas fa-eye"></i> Ver </a>
                    <a href="/type/edit/{{ $value->id }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Editar </a>
                    <a href="/type/delete/{{ $value->id }}" class="btn btn-danger"><i class="far fa-trash-alt"></i>Borrar </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@stop