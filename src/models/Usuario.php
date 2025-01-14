<?php

    class Usuario extends Database
    {
        function comprovarUsuario($matricula,$pass) {
            
            $sql = $this -> db->prepare('SELECT * FROM coche WHERE matricula = :matricula AND pass = :pass');

            $sql->bindParam(':matricula', $matricula);
            $sql->bindParam(':pass', $pass);

            $sql->execute();
            $result = $sql->fetchAll();

            return $result != null;
        }

    }
