<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Benvingut al portal Udemy <?php echo $_SESSION["email"]?></h1>
    <a href="/matricula">Nova matricula</a>
    <section>
    <table>
            <tr>
                <th>Nom</th>
                <th>Hores</th>
                <th>Preu</th>
            </tr>
            <?php
                foreach($cursos as $curso){
                    echo "<tr>";
                        echo "<td>". $curso[0] ."</td>";
                        echo "<td>". $curso[1] ."</td>";
                        echo "<td>". $curso[2] ."</td>";

                        
                        //$pagar = $multa['pagada'] ? "Pagada" : "<form action='/pagar/". $multa['id_multa'] ."' method='post'><input type='submit' value='Fer el pagament'/></form>";
                        //echo "<td>". $pagar . "</td>";
                    echo "</tr>";
                }
                $cont = 0;
                foreach($cursos as $curso){
                    $cont = $cont + $curso[1];
                }
                echo "<td></td>";
                echo"<td>". $cont ." Hores totals</td>";
                $cont2 = 0;
                foreach($cursos as $curso){
                    $cont2 = $cont2 + $curso[2];
                }
                echo"<td>". $cont2." Preu total</td>";
            ?>
        </table>
    </section>
    <a href="/word"><p>Imprimir document de Word</p></a>
</body>
</html>