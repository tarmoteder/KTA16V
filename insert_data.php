<?php
include "include.inc";
include "db.php";

$server = "localhost";
$user = "root";
$pass = "";

$connect = new mysqli($server,$user,$pass);
    
back_home();
menu($files_arr);

if (isset($_POST['nimi'])){
    echo htmlspecialchars($_POST['nimi'])."<br>";
} else { echo "Net POST imeni<br>";      
      }
if (isset($_POST['Family_name'])){
    echo htmlspecialchars($_POST['Family_name'])."<br>";
} else { echo "Net POST imeni<br>";      
      }
    
?>
<!doctype html>
<html>
<body>
<form action="" method="post">
    <ul> 
        <li> 
        <label for="nimi">Imja</label>
        <input type="text" name="nimi">   </li> 
        <li>
        <label for="E-post">E-pst</label>
        <input type="text" name="E-pos">
        </li>
        <li>
        <label for="Family_name">Familija</label>
        <input type="text" name="Family_name">
        </li>
           
        <li>
        <?php add_button($connect);
           // debug print_r($_POST)?>
        </li>
        <li>
        <?php delete_button($connect); ?>
        </li>
        <label for="First_name">Imja</label>
        <input type="text" name="First_name">
        <li>
        <?php show_button($connect); ?>    
        </li>
        
    </ul>
    </form>
    <form action="" method="get">
        <ul>
        <li>
        <label for="ID">ID</label>
        <input type="text" name="ID">
        </li>
        <li>
        <?php show_1_button($connect);
            ?>    
        </li>
        
        </ul>
        
    </form>
</body>
</html>