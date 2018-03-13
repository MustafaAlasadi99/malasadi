<!DOCTYPE html>
<html>
    
<head>
    
    <title>Title</title>
    <meta charset="utf-8">


  


</head>





    <body>



        <?php
            
            $a=array("ten", "ace", "jack");
            
            
            for ($i=0;$i<1;$i++){
            echo " <img src = '../challenges/challenge2/img/cards/clubs/ten.png' /> " . "<br>" ;
            
            }

        ?>







<?php  
    $request = 'http://local.yahooapis.com/MapsService/V1/mapImage?appid=YD-bGrhXEw_JXyniyYzf1l6_NzPNWbPu6Ey5Q--&street=701+First+Avenue&city=Sunnyvale&state=CA&output=php';  
  
    $response = file_get_contents($request);  
  
    if ($response === false) {  
        die('Request failed');  
    }  
  
    $phpobj = unserialize($response);  
  
    echo '<img src="'.$phpobj["Result"].'">';  
?>  







    </body>





aa

</html>
