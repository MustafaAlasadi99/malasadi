<?php
include 'db.php';

$conn=getDatabaseConnection("project");


global $conn;

$sql="SELECT * FROM `movie_scifi` WHERE 1";

$stmt=$conn->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($records);

foreach($records as $record){
    
    echo $record["name"] . "----"  . $record["price"]   . "<br>";
    
}





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
