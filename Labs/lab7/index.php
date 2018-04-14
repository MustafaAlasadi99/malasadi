

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
        <h4> OtterMart - Admin Login </h4>
        
        
        <style>
            
            h1{
                text-align:center;
            }
            
            body{
                
                font-size:3.2em;
                text-align:center;
                background-image: url("img/3.jpg");
                background-repeat: no-repeat;
                color:white;
            }
            
        </style>
        
        
         
    </head>
    <body>

       
        
        <br>  <br>   
        
        <form method="POST" >
            
            Username: <input type="text" name="username"/> <br />
            Password: <input type="password" name="password"/> <br />
            
            <input type="submit" name="submitForm" value="Login!" />
            
        </form>


        <?php
                if (isset($_POST['submitForm']))
                    include 'loginProcess.php';

        ?>


    </body>
</html>