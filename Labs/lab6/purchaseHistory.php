<?php

include 'db.php';

$conn=getDatabaseConnection("ottermart");


$productId=$_GET['productId'];



$sql="SELECT * FROM `om_product`
    natural join om_purchase
    where productId= $productId";
    
    
    
    
    
    $stmt=$conn->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);



   echo $records[0]['productName'] . "<br>";
    
    echo "<img src='" . $records[0]['productImage']  .  "' width='200' /> <br/>";


foreach($records as $record){
    
    global $conn;
 
    echo "Purchase Date: " . $record['purchaseDate']  . "<br/>";
    echo "Unit Price: " . $record['unitPrice']  . "<br/>";
    echo "quantity: " . $record['quantity']  . "<br/>";
    
    
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>