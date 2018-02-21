<?php






function displayDice($dice1,$dice2, $player){
    
    
            
            switch ($dice1) {
              
                case 1: $dice1="1";
                    break;
              
                case 2: $dice1="2";
                    break;
                    
                case 3: $dice1="3";
                    break;
                case 4: $dice1="4";
                    break;
                case 5: $dice1="5";
                    break;
                case 6: $dice1="6";
                    break;
        
            
            }
            
            
             switch ($dice2) {
              
                case 1: $dice2="1";
                    break;
              
                case 2: $dice2="2";
                    break;
                    
                case 3: $dice2="3";
                    break;
                case 4: $dice2="4";
                    break;
                case 5: $dice2="5";
                    break;
                case 6: $dice2="6";
                    break;
        
            
            }
            
        
            
            if($player==1)
            {
             echo "<div id='player1' >    1         </div>"  ;
            
            }
            
            else {
                
                echo "<div id='player2' >    2        </div>"  ;
                
                
            }
            
            
            
            
            echo "<img  src='img/$dice1.png' alt='$dice1' title= '".ucfirst($dice1)."' width= '140'/>";
            
             
             
             
            echo "<img  src='img/$dice2.png' alt='$dice2' title= '".ucfirst($dice2)."' width= '140'/>";  echo " <br> <br> <br>  ";
            
            
            
        
    
}



function displayPoints($dice1,$dice2,$dice3,$dice4){
    
    
  
    
    
    $total1=array($dice1,$dice2);
    
    $total2=array($dice3,$dice4);
    
    
    
    
    
    $total1= array_sum($total1);
    
    $total2= array_sum($total2);
    
    
   echo" <div id='total'>  Total 1: " .     "&nbsp" .     " $total1   <div/>"  .  " <br>";
    
   echo" <div id='total2'>  Total 2: " .     "&nbsp" .     " $total2   <div/>"  .  " <br>";
   
   
   
   
   
   if($total1>$total2){
   
        echo " <div id='winner'>    Winner is : &nbsp 1 <div/>  <br>";
   }
   
   else if ($total2>$total1){
        
        echo "  <div id='winner'>  Winner is : &nbsp 2  <div/>  <br>  ";
   }
   
   
   
   else echo"  <div id='winner'>    It's a Tie  <div/>     <br> " ;
   
   
   
   
   echo "<br>";
    
}







function play(){
    

    
    
    
     for ($i=1; $i<5; $i++){
           
           ${"dice" . $i } = rand (1,6);
           
           
       }
    
    
    
    
    
    
    
    
    $player=1;
    
    displayDice($dice1,$dice2,$player);
    
    
    $player=2;
    
    displayDice($dice3,$dice4,$player);
    
    
  
  
  
    displayPoints($dice1,$dice2,$dice3,$dice4);
    
    
    
    
    
    
}












?>