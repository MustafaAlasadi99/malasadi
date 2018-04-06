<?php
include 'db.php';

$conn=getDatabaseConnection("project");


global $conn;

$sql="SELECT * FROM `movie_products` WHERE 1   ";

$stmt=$conn->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($records);

foreach($records as $record){
    
    echo $record["name"] . "----"  . $record["price"]  ."---" ; echo "<br>";
    echo "<img src= '  img/".$record['img']."      '   width='100'>";   echo "<br>";
    
    
    
}

//" . $record['img']  .  " 



?>















<!DOCTYPE html>
<html>
    
<head>
    
    <title>Title</title>
    <meta charset="utf-8">


  


</head>





    <body>






    </body>





</html>
