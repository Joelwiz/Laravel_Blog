@extends("layouts.main")

@section("content")
        <h1>Edición de producto</h1>

        <form method="post" action="/type/update">
            <input type="hidden" name="id"
                   value="{{$data->id}}">

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control"
                       value="{{$data->name}}"
                >
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@stop