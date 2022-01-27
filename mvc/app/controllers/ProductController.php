<?php
namespace App\Controllers;

use App\Models\Product;
use App\Models\Type;
use Core\Controller;

class ProductController extends Controller {

    public function index() {
        $data = Product::all();

        $this->view('products.index', ['data' => $data]);
    }

    public function create() {
        $this->view('products.create', []);
    }

    public function store() {
        $data = new Product();
        $data->name = $_REQUEST['name'];
        $data->type_id = $_REQUEST['type_id'];
        $data->price = $_REQUEST['price'];
        $data->insert();

        header('Location:/product');
    }

    public function show($args) {
        // $id = (int) $args[0];
        list($id) = $args;
        $data = Product::find($id);

        $this->view('products.show', ["data" => $data]);
    }

    public function edit($arguments) {
        $id = (int) $arguments[0];
        $data = Product::find($id);

        $this->view('products.edit', ["data" => $data]);
    }

    public function update() {
        $id = $_REQUEST['id'];

        $data = Product::find($id);
        $data->name = $_REQUEST['name'];
        $data->type_id = $_REQUEST['type_id'];
        $data->price = $_REQUEST['price'];
        $data->save();

        header('Location:/product');
    }

    public function delete($arguments) {
        $id = (int) $arguments[0];
        $data = Product::find($id);
        $data->delete();

        header('Location:/product');
    }
}