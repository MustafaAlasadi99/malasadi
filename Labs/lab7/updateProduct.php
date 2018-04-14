<?php
    include 'dbConnection.php';
    
    $connection = getDatabaseConnection("ottermart");
    
    function getCategories($catId) {
    global $connection;
    
    $sql = "SELECT catId, catName from om_category ORDER BY catName";
    
    $statement = $connection->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option  ";
        echo ($record["catId"] == $catId)? "selected": ""; 
        echo " value='".$record["catId"] ."'>". $record['catName'] ." </option>";
    }
}
    
    function getProductInfo()
    {
        global $connection;
        $sql = "SELECT * FROM om_product WHERE productId = " . $_GET['productId'];
    
        //echo $_GET["productId"];
        
        $statement = $connection->prepare($sql);
        $statement->execute();
        $record = $statement->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    
    if (isset($_GET['updateProduct'])) {
        
        //echo "Trying to update the product!";
        
        $sql = "UPDATE om_product
                SET productName = :productName,
                    productDescription = :productDescription,
                    productImage = :productImage,
                    price = :price,
                    catId = :catId
                WHERE productId = :productId";
        $np = array();
        $np[":productName"] = $_GET['productName'];
        $np[":productDescription"] = $_GET['description'];
        $np[":productImage"] = $_GET['productImage'];
        $np[":price"] = $_GET['price'];
        $np[":catId"] = $_GET['catId'];
        $np[":productId"] = $_GET['productId'];
                
        $statement = $connection->prepare($sql);
        $statement->execute($np);        

        
    }
    
    
    if(isset ($_GET['productId']))
    {
        $product = getProductInfo();
    }
    
    //print_r($product);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Product </title>
        <style>
          body{
                
                font-size:1.2em;
                text-align:center;
                background-image: url("img/3.jpg");
                background-repeat: no-repeat;
                color:white;
                margin:0 auto;
                
            }
              a{
                 text-decoration:none;
                 color:#cc0000;
                }
                
                a{
                 background-color:#cc0000;
                 border:1px solid #660000;
                 border-radius:5px;
                 color:#fff;
                 
                 padding:2px 2px 2px 2px;
                }
                
                </style>
                
    </head>
    <body>
        <br> <br> <br>
        
        <h1>Update Product</h1>
        
        <form>
            <input type="hidden" name="productId" value= "<?=$product['productId']?>"/>
            Product name: <input type="text" value = "<?=$product['productName']?>" name="productName"><br>
            Description: <textarea name="description" cols = 50 rows = 4><?=$product['productDescription']?></textarea><br>
            Price: <input type="text" name="price" value = "<?=$product['price']?>"><br>
    
            Category: <select name="catId">
                <option>Select One</option>
                <?php getCategories( $product['catId'] ); ?>
            </select> <br />
            Set Image Url: <input type = "text" name = "productImage" value = "<?=$product['productImage']?>"><br>
            <input type="submit" name="updateProduct" value="Update Product">
            
        </form>
        
        <br> <br>
        <div>
            <a href="admin.php">Go Back</a>
            
        </div>
        
        
    </body>
</html>