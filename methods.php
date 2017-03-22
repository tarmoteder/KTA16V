<?php

include "include.inc";
    
back_home();
menu($files_arr);

print_r($_POST);
echo "<br>";
print_r($_GET);
echo "<br>";
// print_r($_SERVER);

?>
<!doctype html>
<html>
    
<body>
    <h1>Metodõ post, get, server</h1>
    
    
    <h2>GET METOD</h2>
<!-- poprobujem GET metod -->
    <form action="" method="get">
    <ul> 
        <li>
        <label for="imja">Imja</label>
        <input type="text" name="imja">
        </li>
        <li>
        <label for="familija">Familija</label>
        <input type="text" name="familija">
        </li>
        <li>
        <label for="e-post">E-post</label>
        <input type="text" name="e-post">
        </li>
        <li>
        <label for="txt">Tekst</label>
            <textarea></textarea>
        </li>
        <li>
        <input type="submit" name="Nazhmi">
        </li>
        
    </ul>
    </form>
<?php if (isset($_GET['imja'])){
    echo htmlspecialchars($_GET['imja'])."<br>";
} else { echo "Net GET imeni<br>";}
      if (isset($_POST['imja'])){
    echo htmlspecialchars($_POST['imja'])."<br>";
} else { echo "Net POST imeni<br>";      
      }

?>
<!-- poprobujem POST metod -->
    <h2>POST METOD</h2>
    <form action="" method="post">
    <ul> 
 <li>
        <label for="imja">Imja</label>
        <input type="text" name="imja">
        </li>
        <li>
        <label for="familija">Familija</label>
        <input type="text" name="familija">
        </li>
        <li>
        <label for="e-post">E-post</label>
        <input type="text" name="e-post">
        </li>
        <li>
        <label for="txt">Tekst</label>
            <textarea></textarea>
        </li>
        <li>
        <input type="submit" name="Nazhmi">
        </li>
        
    </ul>
    </form>


</body>   
    
</html>