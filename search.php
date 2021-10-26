<?php

class search
{
    public $csnumber;
     
    function __constructor ($csnumber)
    {
        $this->csnumber = $csnumber;
        //echo '<hr> this id = '.$csnumber;
    }
    
    function get_name ($csnumber)
    {
        $host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="bank"; 
           // echo 77;
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    $sql = " select * from customer where ID = $csnumber";
    $result = mysqli_query ($conn,$sql);
    $row = mysqli_fetch_array ($result);
        return $row['name'];
    }
     function get_surname ($csnumber)
    {
        $host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="bank"; 
            
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    $sql = " select * from customer where ID = $csnumber";
    $result = mysqli_query ($conn,$sql);
    $row = mysqli_fetch_array ($result);
        return $row['surname'];
    }
    
     function get_dob ($csnumber)
    {
        $host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="bank"; 
            
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    $sql = " select * from customer where ID =  $csnumber";
    $result = mysqli_query ($conn,$sql);
    $row = mysqli_fetch_array ($result);
        return $row['dob'];
    }
    
        
    
     function get_company ($csnumber)
    {
        $host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="bank"; 
            
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    $sql = " select * from customer where ID =  $csnumber";
    $result = mysqli_query ($conn,$sql);
    $row = mysqli_fetch_array ($result);
        return $row['company'];
    }
    
    
     function get_age ($csnumber)
    {
        $host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="bank"; 
            
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    $sql = " select * from customer where ID =  $csnumber";
    $result = mysqli_query ($conn,$sql);
    $row = mysqli_fetch_array ($result);
        return $row['age'];
    }
    
      
      

    
}


?>