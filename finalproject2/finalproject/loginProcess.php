<?php

    session_start();

    //print_r($_POST);  //displays values passed in the form
    
    
    
    
    
    $username = $_POST['userName'];
    $password = sha1($_POST['password']);
    
    //echo $password;
    
    
  
            
    //following sql prevents sql injection by avoiding using single quotes        
    $sql = "SELECT * 
            FROM admin
            WHERE username = :username
            AND   password = :password";    
            
    $np = array();
    $np[":username"] = $username;
    $np[":password"] = $password;
    
            
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //expecting one single record
    
    //print_r($record);

    if (empty($record)) {
        
        
        
        
        
        echo "<script> alert('Incorrect Username or password');
        
               
        </script>";
        
    } else {
        
        
            //echo $record['firstName'] . " " . $record['lastName'];
            $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
            header("Location:admin.php");
        
    }

?>