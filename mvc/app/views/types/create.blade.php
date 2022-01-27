@extends("layouts.main")

@section("content")
    <h1>Alta de producto</h1>
        <form method="post" action="/type/store">

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@stop