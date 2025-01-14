

<?php

    class MultasController extends Controller {

        protected $multa;

        public function __construct()
        {
            parent::__construct();
            $this->multa = new Multa();
        }
        public function index() {
            $this->render("principal");
        }

        public function word(){
            
            $this->render("word"/*, ['cont' => [$registroN, $this->objeto->fitxesMostrar($registroN)]]*/);

        }
        function tabla() {
            
            $sql = $this -> db->prepare('SELECT fecha, tipo_multa, pagada FROM multa');

            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
  
        }
        function pagament(){

        }

    }