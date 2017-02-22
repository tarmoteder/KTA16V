<?php

include "include.inc";



$content = file_get_contents('readme.txt');

if (strpos($content, "\n")){
    echo "on reavahetus";
}
$content = preg_replace("/\n\",'<br>', $content);
    
echo  $content;

?>