<?php

class UsuarioController extends Controller {

    public function index() {
        $this->render("login", ["error" => ""]);
    }

    public function login() {
        $_SESSION['email'] = $_POST["email"];
        $_SESSION['pass'] = $_POST["pass"];

        if ($this->usuarios->comprovarUsuario($_SESSION['email'], $_SESSION['pass'])) {
            header('Location: /cursos');
        } else {
            session_unset();
            session_destroy();
            $this->render("login", ["error" => "* Usuari o contrasenya incorrecta"]);
        }
        exit;
    }

    public function logout() {
        session_unset();
        session_destroy();
        header('Location: /');
    }

}
