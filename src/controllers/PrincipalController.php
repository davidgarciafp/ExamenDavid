<?php

class PrincipalController extends Controller {

    protected $coche;

    public function __construct()
    {
        parent::__construct();
        $this->coche = new Coche();
    }
    public function registre() {
        $this->render("registre");
    }
    public function createRegistre() {
  
        $this->coche->crearRegistre($_POST['matricula'], $_POST['pass'], $_POST['propietario']);
        header('Location: /');

        exit;
    }

}
