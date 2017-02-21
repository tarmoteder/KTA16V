<?php

include "include.inc";



back_home();
menu($files_arr);

$imja = "Tarmo";

// loome näidismassiivi

/* kommeentaar
    mis on pikem 
    kui 1 rida
*/


$test_arr = array("Maksim", "Aleksandr", "Jevgeni", 121, $imja, 12.1213);



$test_arr[] = "Kim";

for ($i=0; $i < count($test_arr); $i++){
     echo $test_arr[$i]."<br>";
}

foreach ($test_arr as $item){
    echo $item."<br>"; }

// vaatame massiivi sisu (liikme tüüpide kaupa)
var_dump($test_arr);
echo "<br>";

// vaatame üksiku muutuja sisu
var_dump($imja);


echo $test_arr[0]."<br>";

// indekseeritud massiiv

$assoc_arr = array("perv6j" => "Maksim", "vtoroi" => "Aleksandr", "treti" => "Jevgeni", "tsetvjort6i" => "Maksim" );

echo $assoc_arr["vtoroi"]."<br>";
var_dump(array_keys($assoc_arr));
var_dump(array_values($assoc_arr));
echo "<br>";
foreach ($assoc_arr as $kljutch => $imja){
    echo $imja." ".$kljutch."<br>";
}

$prog = "Programmirovanie";
$opsyst = "Operacionn6e sistem6";
$it = "Osnov6 IT";

// 2 mõõtme maatriks

$ocenki = array("Maksim" => 
          array($prog => 4, $opsyst => 5, $it => 5),
          "Aleksandr" => 
          array($prog => 5, $opsyst => 4, $it => 4),
          "Jevgeni" => 
          array($prog => 4, $opsyst => 3, $it => 4));

$ocenki_id = array_keys($ocenki);
$ocenki_nr = count($ocenki);

for ($i=0; $i < $ocenki_nr; $i++){
    echo '<strong>'.$ocenki_id[$i].'</strong><br>';
    foreach ($ocenki[$ocenki_id[$i]] as $predmet => $ocenka)
    { echo $predmet." : ".$ocenka."<br>";}
}


?>