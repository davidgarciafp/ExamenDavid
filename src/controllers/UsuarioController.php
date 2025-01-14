<?php

class UsuarioController extends Controller {

    public function index() {
        $this->render("login", ["error" => ""]);
    }

    public function login() {
        $_SESSION['matricula'] = $_POST["matricula"];
        $_SESSION['pass'] = $_POST["pass"];

        if ($this->user->comprovarUsuario($_SESSION['matricula'], $_SESSION['pass'])) {
            header('Location: /multas');
        } else {
            session_unset();
            session_destroy();
            $this->render("login", ["error" => "* Matricula o contrasenya incorrecta"]);
        }
        exit;
    }

    public function logout() {
        session_unset();
        session_destroy();
        header('Location: /');
    }

}
