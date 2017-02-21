<!DOCTYPE html>
<html> 
    <title>21022017 Leht</title>
    
<script type="text/javascript">
  window.onload = function () {
    (function () {
      var date = new Date();
      var time = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
      document.getElementsByTagName('div')[0].innerHTML = "js time: " + time;
      window.setTimeout(arguments.callee, 1000);
    })();
  };
</script>
    
<?php

    
include "include.inc";

    
    
back_home();
menu($files_arr);
    
echo "<strong>Tere KTA-16V!</strong><br>";


    
echo '<div></div>';

vremja();
    
?>
    
</html>