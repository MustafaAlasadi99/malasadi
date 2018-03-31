



<?php





?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Find the Letter! </title>
        
        
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
         
        <style>
        
                  
           h3{
               text-align:center;
               
               font-size:1.9em;
               
           }
           
           
           
           #main{
               
               text-align:center;
               
                font-size:1.9em;
           }
           
           #table {
               
               text-align:center;
               margin: 0 auto;
               
           }
             
            
        </style>
        
         <h3>Find the Letter!</h3>
         
         
    </head>
    
   
    
    <body>

       <br> <br>
       
       
       <div id="main">
           
           Select a letter to find
           
           <?php
           
           $alphabet = range("A","Z");
           
           
           
           ?>
           
           
           
        <form method="post">   
           
           
           <select name="letter" >
               
             <?php  for ($i=0;$i<26;$i++){
                 
                  echo " <option value='$alphabet[$i]'>$alphabet[$i]</option> " ;
                  
                  
             }
              
               ?>
               
           </select>
           
           
           
           
         
         
         
         
        
         
         <br>
         
         
         
         Select table size:
         
         
            <select name="table" >
               
             <?php  for ($i=6;$i<11;$i++){
                 
                  echo " <option value='$i'>$i x $i</option> " ;
                  
                  
             }
              
               ?>
               
           </select>
           
           <br>  <br>
           
           
           
           Select Letter to ommit: 
           
              <select name="letter2" >
               
             <?php  for ($i=0;$i<26;$i++){
                 
                  echo " <option value='$alphabet[$i]'>$alphabet[$i]</option> " ;
                  
                  
             }
              
               ?>
               
           </select>
         
         
         
            
           <input type="submit" value="Create Table" name="submit" width="700px" />
           
           
        
           
           
        </form>   
           
           
           <br>
           
               <?php
         
         
         $print=true;
         
         if(  isset($_POST['letter'])   && isset($_POST['letter2']) &&   $_POST['letter']==$_POST['letter2'] )
         {
             
             echo "<h1> Error: Letter to Find MUST Be different from Letter to Omit!	  </h1>";
             
             $print=false;
         }
         
         
         
         
         if(  isset($_POST['table']) && $print==true) {
             
             echo "<h2>Find the letter &nbsp"; echo $_POST['letter'];  echo "  </h2>";
             
             
             echo "<h4>Letter to Omit:&nbsp"; echo $_POST['letter2'];  echo "  </h4>";
             
             
             
             
                 echo"<table id='table'>";
                 
                 for ($i=0;$i<$_POST['table'];$i++){
                     
                     echo "<tr>";
                        for ($j=0;$j<$_POST['table'];$j++)
                        
                        { $alphabet = range("A","Z");
                          $arrayA=array($_POST['letter2']);
                          $alphabet2 = array_diff($alphabet, $arrayA);
                          
                          
                        $k = array_rand($alphabet2); $v = $alphabet2[$k];
                            echo "<td> $v </td>";
                            
                        }
                      echo "</tr>";
                     
                 }
                 
                  echo"</table>";
                
             
             
         }
         
         
         
         
         
         
         
         
         ?>
           
           
           
           
       </div>

        
        
        









    </body>
    
    
    
    
    
</html>