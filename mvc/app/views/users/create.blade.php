@extends("layouts.main")

@section("content")
    <h1>Alta de usuario</h1>
        <form method="post" action="/user/store">

            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Apellidos</label>
                <input type="text" name="surname" class="form-control">
            </div>
            <div class="form-group">
                <label>F. nacimiento</label>
                <input type="text" name="birthdate" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@stop