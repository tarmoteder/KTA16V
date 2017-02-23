<?php



function back_home(){
    echo '<li><a href="index.php">Obratno</a></li>';
}



function vremja(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");
    echo $time."<br>";
    if ($time > "14:10"){
        echo "Sledusi urok!";
    } else { 
        echo "Nado terpetj!";
    }
    
}

// külastajate loendur

function counter(){
    $file_name = "count.txt";
    if (!file_exists($file_name)){
     $file = fopen($file_name,'w') or die("Can't open");
    $count = 1;
    fwrite($file, $count);
//    $count = file_get_contents($file_name);
    echo "Te olete külastaja nr: ".$count;
    fclose($file);
        } else {
       $file = fopen($file_name,'r+') or die("Can't open"); 
        $count = file_get_contents($file_name)+1;
        fwrite($file, $count);
        echo "Te olete külastaja nr: ".$count."<br>";
        fclose($file);
    }
}

function GetUserIP(){
    $ip = $_SERVER['REMOTE_ADDR'];
    $file_name= "visitor.txt";
    $time = date("H:i:s");
    $visitor = $ip." ".$time."\n";
    $file = fopen($file_name,'a') or die("Can't open");
    fwrite($file, $visitor);
    fclose($file);
    echo "Teie aadress on: ".$ip;
    
}

?>