<?php
namespace App\Controllers;

use App\Models\Type;
use Core\Controller;

class TypeController extends Controller {

    public function index() {
        $data = Type::all();

        $this->view('types.index', ['data' => $data]);
    }

    public function create() {
        $this->view('types.create', []);
    }

    public function store() {
        $data = new Type();
        $data->name = $_REQUEST['name'];
        $data->insert();

        header('Location:/type');
    }

    public function show($args) {
        // $id = (int) $args[0];
        list($id) = $args;
        $data = Type::find($id);

        $this->view('types.show', ["data" => $data]);
    }

    public function edit($arguments) {
        $id = (int) $arguments[0];
        $data = Type::find($id);

        $this->view('types.edit', ["data" => $data]);
    }

    public function update() {
        $id = $_REQUEST['id'];

        $data = Type::find($id);
        $data->name = $_REQUEST['name'];
        $data->save();

        header('Location:/type');
    }

    public function delete($arguments) {
        $id = (int) $arguments[0];
        $data = Type::find($id);
        $data->delete();

        header('Location:/type');
    }
}