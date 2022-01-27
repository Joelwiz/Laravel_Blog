@extends("layouts.main")

@section("content")
        <h1>Edición de producto</h1>

        <form method="post" action="/product/update">
            <input type="hidden" name="id"
                   value="{{$data->id}}">

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control"
                       value="{{$data->name}}"
                >
            </div>
            <div class="form-group">
                <label>Tipo</label>
                <input type="text" name="type_id" class="form-control"
                       value="{{$data->type_id}}"
                >
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="text" name="price" class="form-control"
                       value="{{$data->price}}"
                >
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@stop