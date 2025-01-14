<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Consulta les teves multes</h1>
    <section>
        <table>
            <thead>
                <?php
                    $columns = ["Data","Tipus de multa","Estat"];                  

                    echo"<tr>";

                    foreach ($columns as $column)
                        echo "<th>{$column}</th>";

                    echo"</tr>";
                ?>
            </thead>
            <tbody class="tbody">

            </tbody>
            
        </table>
    </section>
    <a href="/pagament"><p>Fer el pagament</p></a>
    <a href="/word"><p>Imprimir document de Word</p></a>
</body>
</html>