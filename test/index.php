<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>  </title>
        <style>
            
            body {
                
                text-align:center;
                
                margin: 0 auto;
                padding-top: 10%;
                
                background-color: orange;
                font-size:2.0em;
            }
            
            input{
                
                width: 300px;
                
                font-size:1.5em;
            }
            
            
            
        </style>
        
        
    </head>
    
    
    
    <body>

       

     
    <?php
        session_start();
        $counter_name = "counter.txt";
        
        
// Check if a text file exists. If not create one and initialize it to zero.
    if (!file_exists($counter_name)) {
         $f = fopen($counter_name, "w");
         fwrite($f,"0");
         fclose($f);
}



        // Read the current value of our counter file
        $f = fopen($counter_name,"r");
        $counterVal = fread($f, filesize($counter_name));
        fclose($f);



        // Has visitor been counted in this session?
        // If not, increase counter value by one
        if(!isset($_SESSION['hasVisited'])){
        $_SESSION['hasVisited']="yes";
        $counterVal++;
        $f = fopen($counter_name, "w");
        fwrite($f, $counterVal);
        fclose($f); 
}





        
        ?>
        
        <?php
        echo "You are Fisitor number $counterVal to this site";
        ?>
        
        <br>  <br>  <br>
        
        
            <form>
                <input type="submit" value="refresh"/>
            
            </form>
        
        
   
        
        


    </body>
    
    
    
</html>