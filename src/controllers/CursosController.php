<?php

    class CursosController extends Controller {

        protected $curso;

        public function __construct()
        {
            parent::__construct();
            $this->curso = new Cursos();
        }
        public function index() {
            $this->checkSession();
            $this->render("principal", ["cursos" => $this -> curso-> cursosMatriculados($_SESSION['email'])]);
        }

        public function word(){
            try {
                $this->render("word", ["cursos" => $this -> curso-> cursosMatriculados($_SESSION['email'])]);
            } catch (Exception $e) {
                echo "Error al generar el archivo Word: " . $e->getMessage();
            }
        }
        public function pantallaMatricula() {
            try{
                $this->render("matricula",["cursos" => $this -> curso-> cursosDisponibles($_SESSION['email'])]);
            } catch (Exception $e) {
                echo "Error al generar el archivo Word: " . $e->getMessage();
            }
        }

        public function matricula(){
            try {
                $this->render("principal", ["cursos" => $this -> curso-> anyadirMatricula($_SESSION['email'])]);
            } catch (Exception $e) {
                echo "Error al generar el archivo Word: " . $e->getMessage();
            }
        }
        
        // function tabla() {
            
        //     $sql = $this -> db->prepare('SELECT fecha, tipo_multa, pagada FROM multa');

        //     $sql->execute();
        //     $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        //     return $result;
  
        // }
        // function pagament(){

        // }

    }