<?php

session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}
include 'dbConnection.php';
$conn = getDatabaseConnection("ottermart");

function displayAllProducts(){
    global $conn;
    $sql="SELECT * FROM om_product";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //print_r($records);

    return $records;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
        <style>
            
            form {
                display: inline;
            }
            
              
            
            h1{
                text-align:center;
            }
            
            body{
                
                font-size:1.2em;
                text-align:center;
                background-image: url("img/3.jpg");
                background-repeat: no-repeat;
                color:white;
                margin:0 auto;
                
            }
            table{
                
                margin:0 auto;
            }
        
            
            a{
                 text-decoration:none;
                 color:#cc0000;
                }
                
                a.button{
                 background-color:#cc0000;
                 border:1px solid #660000;
                 border-radius:5px;
                 color:#fff;
                 
                 padding:2px 2px 2px 2px;
                }
        
            .container{
             width:100%;
             clear:both;
            }
            
            
            
        </style>
        
        <script>
            
            function confirmDelete() {
                
                return confirm("Are you sure you want to delete it?");
                
            }
            
        </script>
        
    </head>
    <body>


        
        <h1> Admin Main Page </h1>
        
        <h3> Welcome <?=$_SESSION['adminName']?>! </h3>
        
        <br />
        <form action="addProduct.php">
            <input type="submit" name="addproduct" value="Add Product"/>
        </form>
        
        <form action="logout.php">
            <input type="submit"  value="Logout"/>
        </form>
        
        <br /> <br />
        <strong> Products: </strong> <br />
        
        <table>
        
        <?php $records=displayAllProducts();
            foreach($records as $record) {
                echo "<tr>";
                
                
                
                echo"<td>";
                
                echo"<div class='container'>";

                echo "[<a href='updateProduct.php?productId=".$record['productId']."' class='button'>Update</a>]";
                
                echo "</div>";
                
                echo"</td>";
                
                //echo "[<a href='deleteProduct.php?productId=".$record['productId']."'>Delete</a>]";
                
                echo"<td>";
                echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
                echo "<input type='hidden' name='productId' value= " . $record['productId'] . " />";
                echo "<input type='submit' value='Remove'>";
                echo "</form>";
                echo"</td>";
                
                
                echo"<td>";
                echo $record['productName'];
                echo"</td>";
                
                
                echo "</tr>";
                
                
                
            }
        
        ?>
        
        </table>
        

    </body>
</html>