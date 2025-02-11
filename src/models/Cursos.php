<?php
    
    class Cursos extends Database
    {
        function cursosMatriculados($email) {
            
        try{
            $sql = $this -> db->prepare('SELECT c.nombre, c.horas, c.precio, u.email FROM usuarios u INNER JOIN matricula m ON u.email = m.email INNER JOIN cursos c ON m.idCurso = c.idCurso WHERE u.email = :email');


            $sql->bindParam(':email', $email);

            $sql->execute();
            $result = $sql->fetchAll();

            return $result;
        
        }catch (PDOException $e) {
            echo 'Error en la consulta: ' . $e->getMessage();
            return false; 
        }

        function cursosDisponibles($email) {
            
            try{
                $sql = $this -> db->prepare('SELECT c.nombre FROM usuarios u INNER JOIN matricula m ON u.email = m.email INNER JOIN cursos c ON m.idCurso = c.idCurso WHERE NOT u.email = :email');
    
    
                $sql->bindParam(':email', $email);
    
                $sql->execute();
                $result = $sql->fetchAll();
    
                return $result;
            
            }catch (PDOException $e) {
                echo 'Error en la consulta: ' . $e->getMessage();
                return false; 
            }
        }
        function anyadirMatriculas($idCurso, $email, $fecha){
            
            try{
                $sql = $this -> db->prepare('INSERT INTO `matricula` (`idCurso`, `email`, `fecha`) VALUES (?, ?, GETDATE())');

                $sql->execute([$idCurso, $email, $fecha]);

                $estado = false;
            }
                
            catch (PDOException $e) {
                $estado = true;
            }

            return $estado;
        }
    }
}