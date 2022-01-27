<?php
namespace App\Controllers;

use App\Models\User;
/**
 *
 */
class LoginController
{

    function __construct()
    {
        // echo "En LoginController";
    }

    public function index()
    {
        require "../app/views/login.php";
    }

    public function in()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = User::findByEmail($email);

        if ($user) {
            if ($user->passwordVerify($password)) {
                //guardar usuario en sesiÃ³n
                $_SESSION['user'] = $user;
                header('Location: /home');
                return;
            }
        }

        $_SESSION['old']['email'] = $email;
        header('Location: /login');
    }

    public function out()
    {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: /login');
    }
}