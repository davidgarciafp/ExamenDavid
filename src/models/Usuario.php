<?php

    class Usuario extends Database
    {
        function comprovarUsuario($email,$pass) {
            
            $sql = $this -> db->prepare('SELECT * FROM usuarios WHERE email = :email AND pass = :pass');

            $sql->bindParam(':email', $email);
            $sql->bindParam(':pass', $pass);

            $sql->execute();
            $result = $sql->fetchAll();

            return $result != null;
        }

    }
