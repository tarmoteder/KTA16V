<?php

include "include.inc";



$content = file_get_contents('readme.txt');

echo nl2br($content);

function file_write(){
    $file = fopen('tekst.txt','a') or die("Can't open");
    $tekst = "Esimene teksti kirjutamise proov\n";
    fwrite($file, $tekst);
    fclose($file);
}



file_write();

$content = file_get_contents('tekst.txt');

echo nl2br($content);

?>