<?php
namespace App\Controllers;

use App\Models\User;
use Core\Controller;
use Dompdf\Dompdf;

class UserController extends Controller {
    public function index() {
        $users = User::all();

        $this->view('users.index', ['users' => $users]);
    }

    public function create() {
        $this->view('users.create', []);
    }

    public function store() {
        $user = new User();
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->insert();

        header('Location:/user');
    }

    public function show($args) {
        // $id = (int) $args[0];
        list($id) = $args;
        $user = User::find($id);

        $this->view('users.show', ["user" => $user]);
    }

    public function edit($arguments) {
        $id = (int) $arguments[0];
        $user = User::find($id);

        $this->view('users.edit', ["user" => $user]);
    }

    public function update() {
        $id = $_REQUEST['id'];

        $user = User::find($id);
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->save();

        header('Location:/user');
    }

    public function delete($arguments) {
        $id = (int) $arguments[0];
        $user = User::find($id);
        $user->delete();

        header('Location:/user');
    }

    public function pdf() {
        //iniciar buffer, para construir un response
        ob_start();
        $users = User::all();

        $this->view('users.pdf', ['users' => $users]);

        // Volcamos el contenido del buffer
        // el response ya no va al navegador, va a $html
        $html = ob_get_clean();

        $dompdf = new DOMPDF();
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("usuarios.pdf", array("Attachment"=>0));
    }

    public function pdfsimple() {
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}