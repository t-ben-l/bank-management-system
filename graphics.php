<?php 

class Gbalance
    
{
    
    function Display($y,$x)
    {
        
        echo ' 
        
        <div style = "position: absolute;  width: 80%; height: 70%; background-color: darkblue; font-size: 28px; text-align: center; color: white;">
        
        Balance for account number '.$y.' is $'.$x.'
    
        
        
        
        ';
         
    ob_flush();
    flush();
    sleep(5);
    echo '<br> <hr> Balance window time due ';
    
     ob_flush();
    flush();
    sleep(3);
    echo '<br> Now leaving  ';
     ob_flush();
    flush();
    
    sleep(1);
    echo '<br> <h1> Bye  . . . </h1> ';
    
     ob_flush();
    flush();
    sleep(1);
    echo '<br>  . . . . . . . . . . . . .  </div>
        
        
        
        ';
   
    ob_end_flush();
    }
    
    
}


class Gtransaction
    
{
    
    function Display ($csnumber, $accnumber)
    {
        
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="bank"; 
            
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    $sql = " select * from deposit where customerId = $csnumber";
    $result = mysqli_query ($conn,$sql);
   
         echo ' 
         <div style = "position: absolute;  width: 80%; height: 10%; background-color: darkblue; font-size: 25px; text-align: center; color: white; margin: 3px;"> DEPOSITS </div>
         
        <div style = "position: absolute;  width: 80%; height: 70%; background-color: darkblue; font-size: 25px; text-align: center; color: white;">
     '; 
        
        
        while ($row = mysqli_fetch_array ($result))
        
        
    {
        
                
    echo ' <br> '.$row['control'].'   deposits '.$row['amount'].'  
        '; 
        
    }
     
        
    $sql = " select * from withdrawal where customerId = $csnumber";
    $result = mysqli_query ($conn,$sql);
  
          
        while ($row = mysqli_fetch_array ($result))
        
        
    {
        
                
    echo ' <br> '.$row['control'].'   withdraw '.$row['amount'].'  
        '; 
        
    }
        
        echo '</div>';
       
         ob_flush();
    flush();
    sleep(5);
        
    ob_end_flush();
        
        
    }
    
    
    
}




?>