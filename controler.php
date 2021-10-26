<?php
include 'main.php';
include 'graphics.php';


if (isset($_POST['submit1']))

   { 

$csname = $_POST['customer_name'];
$csurname = $_POST['customer_surname'];
$csnumber = $_POST ['customer_number'];
$accountTitle = $_POST['account_title'];
$accountType = $_POST['account_type'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$nationality = $_POST ['nationality'];
$address = $_POST['address'];
$phoneNumber = $_POST['phone_number'];
$nicNumber = $_POST['nic_number'];
$email = $_POST['email'];
$company = $_POST['company_name'];
$ocupation = $_POST['ocupation'];
$initialDeposit = $_POST['initialDeposit'];



$cust = new Customer($csnumber,$csname,$csurname,$dob,$company, 26);
$acc = new Account ($csnumber,162723, $accountType, 10200,897);
$address = new Address ($csnumber,'savings', '2092 hillside oktree', 'bulawayo' , 'zimbabwe');
$contact = new ContactNumber ($csnumber,263, 'savings', 0711342566);
$email = new Email ($csnumber,'emailaccount@gmail.com');
$company = new Company (28912010,82739272); 
echo " bhudaaa";

}

if (isset($_POST['submit2']))
{
    
$csid = $_POST['customer_id'];
$accountTitle = $_POST['account_title'];
$Deposit = $_POST['Deposit'];
    
    $trans = new Transaction ();
    $trans->set_transaction($csid,123,$accountTitle,$Deposit,'deposit');

}


if (isset($_POST['submit3']))
{
    // from 
$csnumber = $_POST['customer_number'];
$accnumber = $_POST ['acc_number'];
$nicNumber = $_POST['nic_number'];
$amount = $_POST['amount'];
    
    //to 
    
    
$csnumber2 = $_POST['customer_number2'];
$accnumber2 = $_POST ['acc_number2'];
$nicNumber2 = $_POST['nic_number2'];
    
$trans = new Transfer($csnumber,$accnumber,$amount,$csnumber2,$accnumber2);

    
}


if (isset($_POST['submit4']))
{
    
$csnumber = $_POST['customer_number'];
$accnumber = $_POST['account_number'];
//$nicNumber = $_POST['nic_number'];
$Ammount = $_POST['withdraw'];
      
$withdraw = new Withdraw($csnumber,$accnumber,$Ammount);

     
}


if (isset($_POST['submit5']))
{
    
$csnumber = $_POST['customer_number'];
$accountnumber = $_POST['account_number'];
    
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="bank"; 
            
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    $sql = " select accNumber, balance from account where cunstomerId = $csnumber";
    $result = mysqli_query ($conn,$sql);
    $row = mysqli_fetch_array ($result);
    
   /* echo $row['balance'];
    ob_flush();
    flush();
    sleep(3);
    echo "<br> slept.... ";
    
     ob_flush();
    flush();
    sleep(2);
    echo "<br> Now leaving  ";
        

     ob_flush();
    flush();
    
    sleep(1);
    echo "<br> <h1> Bye  . . . </h1> ";
    
     ob_flush();
    flush();
    sleep(1);
    echo "<br>  . . . . . . . . . . . . . ";
   
    ob_end_flush();
    */
    
    
    $bal = new Gbalance;
    $bal->Display($row['accNumber'],$row['balance']);
  // header("Location:admin.html");
    echo ' 
    <script> window.location = "admin.php" </script> 
    ';
}

if (isset($_POST['submit6']))
{
    
$csnumber = $_POST['customer_number'];
$accountnumber= $_POST['account_number'];
 $transactions = new Gtransaction;
    $transactions->Display($csnumber,$accountnumber);
  // header("Location:admin.html");
    echo ' 
    <script> window.location = "admin.php" </script> 
    ';
}

?>