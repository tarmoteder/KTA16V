<?php



function back_home(){
    echo '<li><a href="index.php">Obratno</a></li>';
}



function vremja(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");
    echo $time."<br>";
    if ($time > "18:45"){
        echo "Domoj pora!";
    } else { 
        echo "Nado terpetj!";
    }
    
}

?>