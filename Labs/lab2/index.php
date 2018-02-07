<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Lab2: 777 Slot Machine </title>
    </head>
    
    
    
    <body>


        <?php
        
        function displaySymbol($randomValue){
            
            //$randomValue=rand (0,2);
            
            echo $randomValue;
        
            if($randomValue==0) {
                $symbol="seven";
        
          } else if ($randomValue==1){
                 $symbol="orange";
        
           } else {
                $symbol="cherry";
        
          }
    
              echo " <img src='img/$symbol.png' width='70' alt='$symbol' title='$symbol'> ";
            
        }
        
        
        $randomValue1=rand(0,2);
        displaySymbol($randomValue1);
        
          $randomValue2=rand(0,2);
        displaySymbol($randomValue2);
        
          $randomValue3=rand(0,2);
        displaySymbol($randomValue3);
      
         
echo "<br/><hr> Values:$randomValue1 $randomValue2 $randomValue3 "
         
         

      
         
         
         
         
       
         
         
         
         
         
         
         
        
        ?>


    <!--    <img src="img/lemon.png" width="70" alt="Lemon" title="Lemon">
        <img src="img/cherry.png" width="70" alt="cherry" title="cherry">
        <img src="img/orange.png" width="70" alt="orange" title="orange">
-->


    </body>
    
    
    
</html>