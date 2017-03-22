<?php

// include "include.inc";

$server = "localhost";
$user = "root";
$pass = "";

$connect = new mysqli($server,$user,$pass);


if (!$connect){
    die('Net svjazi: '.mysqli_connect_error());
}
else {
echo "Est svjaz!<br>";
// mysqli_close($connect);
}

function my_query($connect){
    $sql = "SELECT * from kta16v.grupp";
    $result = $connect ->query($sql);
    
  if ($result -> num_rows > 0){
      while($row = $result->fetch_assoc()){
          echo "id: ".$row["ID"]." Name: ".$row["First_name"]." Familyname: ".$row["Family_name"]." Timestamp: ".$row["Insert_date"]."<br>";
      } 
  } else { echo "Pustaja baza";} 
}
// ishem po adnomu
    
function search_by_id($connect){
    $sql = 'SELECT * from kta16v.grupp WHERE ID='.$_GET['ID'];
    $result = $connect ->query($sql);
    if ($result -> num_rows > 0){
      while($row = $result->fetch_assoc()){
          echo "id: ".$row["ID"]." Name: ".$row["First_name"]." Familyname: ".$row["Family_name"]." Timestamp: ".$row["Insert_date"]."<br>";
      }} else { echo "Net takogo stroka";}
    
}
    

//    

// my_query($connect);

function my_insert($connect){
    /// debugprint_r($_POST);

    $sql = "INSERT INTO kta16v.grupp (First_name, Family_name) VALUES ('".$_POST['nimi']."','".$_POST['Family_name']."')";
    $result = $connect ->query($sql);
}




function my_delete($connect) {
    $sql = "DELETE FROM kta16v.grupp WHERE First_name='".$_POST['nimi']."'";
    $result = $connect ->query($sql);
}
// my_delete($connect);
// my_insert($connect);

function show_button($connect){
echo "
    <input type='submit' name='show' value='Pokazhy'>" ;
    
function show_1_button($connect){
    
echo "
    <input type='submit' name='show_1' value='Pokazhy opredeljonnõje'>" ;    
}
if(isset($_GET['ID'])){
    search_by_id($connect);
}}
function delete_button($connect){
echo "
    <input type='submit' name='delete' value='Udali'>" ;

if(isset($_POST['delete'])){
    my_delete($connect);
}}

function add_button($connect){
echo "
    <input type='submit' name='add' value='Dobav'>" ;

if(isset($_POST['add'])){
    my_insert($connect);
}}

/*
show_button($connect);
delete_button($connect);
add_button($connect);

echo "<br>";
echo "GET väärtused:".var_dump($_GET)."<br>";
echo "POST väärtused:".var_dump($_POST);
*/
mysqli_close($connect);
?>