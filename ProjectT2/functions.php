<?php


include 'dbConnection.php';

$conn=getDatabaseConnection("project");

function displayCategories(){
global $conn;

$sql="SELECT catId, catName FROM movie_category order by catName";

$stmt=$conn->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($records);

foreach($records as $record){
    
    echo "<option value='".$record["catId"]."'>" . $record["catName"] . "</option> " ; 
    
}

}


function displayFormats(){
global $conn;

$sql="SELECT formatId, formatName FROM movie_format order by formatName";

$stmt=$conn->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($records);

foreach($records as $record){
    
    echo "<option value='".$record["formatName"]."'>" . $record["formatName"] . "</option> " ; 
    
}

}



function displayRatings(){
global $conn;

$sql="SELECT ratingId, ratingName FROM movie_rating order by ratingName";

$stmt=$conn->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($records);

foreach($records as $record){
    
    echo "<option value='".$record["ratingName"]."'>" . $record["ratingName"] . "</option> " ; 
    
}

}




function displayResults(){
    global $conn;
    
    if(isset($_GET['searchForm']))
    {
        
        $namedParameters= array();
        
        $sql= "SELECT * FROM `movie_products` WHERE 1";
        
        
         if(!empty($_GET['product']))
         {
              $sql.=  " and name LIKE :name" ;
            $namedParameters[":name"]= "%" . $_GET['product'] . "%";
                
        }
        
        
        if(!empty($_GET['category']))
        {
            $sql.=  "  and catId= :categoryId" ;
            $namedParameters[":categoryId"]=  $_GET['category'] ;
                
        }
        
        if(!empty($_GET['format']))
        {
            $sql.=  "  and Format= :Format" ;
            $namedParameters[":Format"]=  $_GET['format'] ;
                
        }
        
         if(!empty($_GET['rating']))
        {
            $sql.=  "  and Rating= :Rating" ;
            $namedParameters[":Rating"]=  $_GET['rating'] ;
                
        }
        
        
        
     if (isset($_GET['sort']))
        {
     
        if ($_GET['sort']=="asc")
        {
                $sql.=" ORDER BY name";
        }
        
        
        else 
        {
            $sql.=" ORDER BY name DESC";
        }
        
    }  
        
        
        
        
        
        
        $stmt=$conn->prepare($sql);
        $stmt->execute($namedParameters);
        $records=$stmt->fetchAll(PDO::FETCH_ASSOC);



        foreach($records as $record)
        {
    
            echo $record["name"] . "----"  . $record["price"]  ."---" ; echo "<br>";
            echo "<img src= '  img/".$record['img']."      '   width='100'>";   echo "<br>";
        }
        
        
        
        
    }
    
    
    
}





?>