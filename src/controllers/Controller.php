<?php


class Controller {
    protected $usuarios;
    protected $curso;

    public function __construct()
    {
        // Inicia la sesión
        $this->usuarios = new Usuario();
        //$this->admin = new Admin();
        $this->curso = new Cursos();
    }

    // Verifica si la sesión está activa
    protected function checkSession()
    {
        if (!isset($_SESSION['email']) and !isset($_SESSION['user'])) {
            header('Location: /');
            exit; // Importante para detener la ejecución tras redirigir
        }
    }

    // Renderiza la vista solicitada
    protected function render($view, $data = [])
    {
        extract($data);
        $viewFile = "../src/views/$view.php";
        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            echo "View $view not found.";
        }
    }
}

?>
