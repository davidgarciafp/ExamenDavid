<?php

    class Coche extends Database
    {
        
        function crearRegistre($matricula, $pass, $propietario) {
            
            $sql = $this -> db->prepare('INSERT INTO coche (matricula, pass, propietario) VALUES (?, ?, ?)');

            $sql->execute([$matricula, $pass, $propietario]);
        }

        
    }