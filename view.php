<?php

// include "include.inc";


$files_arr = array("functions", "array", "view", "files", "tips", "generate", "file");




function menu($array){
    
    
    for ($i=0; $i < count($array); $i++){
     echo '<li><a href="'.$array[$i].'.php">.'.$array[$i].'</a></li>';   
    }
    
}


    
?>