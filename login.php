<?php 

$id =  $_POST['id'];
$pass = $_POST['pass'];

if (isset ($_POST['subpass']))
       
{
    
    
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="bank"; 
            
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    $sql = " select * from email where email = '$id' and customerId = '$pass' ";
    $result = mysqli_query ($conn,$sql);
   
    if ($row = mysqli_fetch_array ($result))
    {
        
        session_start();
        $_SESSION['email'] = $id;
        $_SESSION['id'] = $pass;
        header('Location:user.php');
        
        
    }
    
    else 
    {
        $sql = " select * from admin where email = '$id' and name = '$pass' ";
    $result = mysqli_query ($conn,$sql);
   
    if ($row = mysqli_fetch_array ($result))
    {
        
        session_start();
        $_SESSION['email'] = $id;
        $_SESSION['name'] = $pass;
        header('Location:admin.php');
        
        
    }
        else
        {
            $sql = " select * from tailor where email = '$id' and name = '$pass' ";
    $result = mysqli_query ($conn,$sql);
   
    if ($row = mysqli_fetch_array ($result))
    {
        
        session_start();
        $_SESSION['email'] = $id;
        $_SESSION['name'] = $pass;
        header('Location:tailor.php');
        
        
    }
    
        }
    
        
    }
    
    
    
}
   




?>