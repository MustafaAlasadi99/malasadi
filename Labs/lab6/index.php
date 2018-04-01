<?php


include 'db.php';

$conn=getDatabaseConnection("ottermart");

function displayCategories(){
global $conn;

$sql="SELECT catId, catName FROM om_category order by catName";

$stmt=$conn->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($records);

foreach($records as $record){
    
    echo "<option value='".$record["catId"]."'>" . $record["catName"] . "</option> " ; 
    
}



}



function displaySearchResults(){
    global $conn;
    if (isset($_GET['searchForm'])){
        
        $namedParameters= array();
        
        $sql= "select * from om_product where 1";
        
    if(!empty($_GET['product'])){
              $sql.=  " and productName LIKE :productName" ;
            $namedParameters[":productName"]= "%" . $_GET['product'] . "%";
                
    }
    
    
      if(!empty($_GET['category'])){
              $sql.=  " and catId= :categoryId" ;
            $namedParameters[":categoryId"]=  $_GET['category'] ;
                
    }
      
          
         if(!empty($_GET['priceFrom'])){
              $sql.=  " and price>= :priceFrom" ;
            $namedParameters[":priceFrom"]=  $_GET['priceFrom'] ;
                
    }
    
      if(!empty($_GET['priceTo'])){
              $sql.=  " and price<= :priceTo" ;
            $namedParameters[":priceTo"]=  $_GET['priceTo'] ;
                
    }
    
    if (isset($_GET['orderBy'])){
     
        if ($_GET['orderBy']=="price"){
            
            $sql.=" ORDER BY price";
        }
        
        
        else {
            $sql.=" ORDER BY productName";
            
        }
        
    }            
                
                $stmt=$conn->prepare($sql);
                $stmt->execute($namedParameters);
                $records=$stmt->fetchAll(PDO::FETCH_ASSOC);

            //print_r($records);

        foreach($records as $record){
    
    
            echo "<a href=\"purchaseHistory.php?productId=".$record["productId"]."\">History </a>";
             echo $record["productName"] . " " . $record["productDescription"] . "  $" . $record["price"]   ; echo "<br>"; echo "<br>";
    
            }
                
                
                
                
                
                
        
    }
    
    
}



?>



<!DOCTYPE html>
<html>
    <head>
        <title>Ottermart Product Search</title>
        
        <style>
            
             @import url("css/styles.css");
             
             
        </style>
        
        
        
    </head>
    
    
    
    <body>
        
        <h1>Ottermart Product Search </h1>  <br>


        <div id="form">    
        <form>
            
            Product: <input type="text" name="product"  /        >      <br>                 
            
            Category: 
                <Select name="category">
                    <option value="">Select One </option>
                    <?=displayCategories()?>
                </Select>
            <br>
            
            Price: From <input type="text" name="priceFrom" size="7"/>
                   To   <input type="text" name="priceTo" size="7"/>
                   
                   
                   
            <br>
            
            Order Results by: <br/>
            
            <input type="radio" name="orderBy" value="price" /> Price <br>
            <input type="radio" name="orderBy" value="name" /> Name
            
            
            
            <br>
            
            
            <input type="submit" value="Search" name="searchForm" id="submit"/>
                   
        </form>


        </div>
        
        

        <br>
        
        <hr>
        
        <div id="results">
        <?= displaySearchResults()?>

        </div>

    </body>
</html>