<?php
require('../vendor/autoload.php');

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

$phpWord = new PhpWord();

$section = $phpWord->addSection();
$section->addTitle("Cursos Matriculados", 1);

$table = $section->addTable();

$table->addRow();
$table->addCell(2000)->addText("Nom");
$table->addCell(2000)->addText("Hores");
$table->addCell(2000)->addText("Preu");
$cont = 0;
$cont2 = 0;

foreach($cursos as $curso){
    $table->addRow();
    $table->addCell(2000)->addText($curso[0]); 
    $table->addCell(2000)->addText($curso[1]); 
    $table->addCell(2000)->addText($curso[2]); 

    $cont += $curso[1];
    $cont2 += $curso[2];
}

$table->addRow();
$table->addCell(2000)->addText("Total");
$table->addCell(2000)->addText($cont . " Hores totals");
$table->addCell(2000)->addText($cont2 . " Preu total");


$file = 'documento.docx';
$phpWord->save($file, 'Word2007');


header("Content-Description: File Transfer");
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment;filename="' . basename($file) . '"');
header("Content-Transfer-Encoding: binary");
header("Content-Length: " . filesize($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');

readfile($file);

// Eliminar el archivo del servidor después de enviarlo
unlink($file);

exit;
