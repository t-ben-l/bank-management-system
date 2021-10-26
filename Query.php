<?php





class Connect

{
    
    private $host ;
private $dbusername ;
private $dbpassword;
private $dbname;
public $conn;
    function connection () 
    
    {
        
$this->conn = new mysqli ($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
      if (mysqli_connect_error())
{
    
    die (' db connection error');
}  
    }
    
    
   public function __construct () //default values 
    {
        $this->host = "localhost";
$this->dbusername = "root";
$this->dbpassword ="";
$this->dbname="bank";
//connection();
       
$this->conn = new mysqli ($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
    }
    
   /* function __construct ($host, $dbusername, $dbpassword, $dbname) //new database connection with differnt db connection information
    {
        $this->host = $host;
$this->dbusername = $dbusername;
$this->dbpassword = $dbpassword;
$this->dbname=$dbname ;
 connection();
    } */
      function newDb ($host, $dbusername, $dbpassword, $dbname)
    {
        $this->host = $host;
$this->dbusername = $dbusername;
$this->dbpassword = $dbpassword;
$this->dbname=$dbname ;
connection();
        
        
    }
    function get_connection ()
    {
        return $this->conn;
    }
 /*   function connection () 
    
    {
        
$this->conn = new mysqli ($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
      if (mysqli_connect_error())
{
    
    die (' db connection error');
}  
    }
    
    function get_connection ()
    {
        
        
        return $this->conn;
    }
    
} */

}

class middleMan 
{
    
    
}
 function ls ()
        
    {
        
    $db = new Connect();
        return $db;
    }
 
class sendData extends Connect

{
   
function __construct()
    
{
    
    echo ' bhooo ';
}
 function sql ($sql)
 
 {
     
          if($db->get_connection()->query($sql))
      {
         return 1; 
      }
      
      else return 0;
        
 }
    function parseCustomer  ($ID,$name,$surname,$dob,$company,$age)
    {
        
    $sql = "INSERT INTO customer (ID,name,surname,dob,company,age) values ('$ID','$name','$surname','$dob','$company','$age')";
  if ( ls()->get_connection()->query($sql))
   echo "shooo";
   else 
   echo "nooo"; 
    
    }
    
    
     function parseAccount ($cunstomerId, $accNumber, $type, $widrawalLimit,$balance )
    {
        
        
    $sql = "INSERT INTO account (cunstomerId, accNumber, type, widrawalLimit,balance ) values ('$cunstomerId', '$accNumber', '$type', '$widrawalLimit', '$balance' )";
    
       if ( ls()->get_connection()->query($sql))
   echo "shooo";
   else 
   echo "nooo"; 
        
    }
    
  function   parseAddress ($useId, $type, $street, $city , $country)
    {
            
    $sql = "INSERT INTO address ( userId, type, street, city , country) values  ('$useId', '$type', '$street', '$city' , '$country')";
    
        if ( ls()->get_connection()->query($sql))
   echo "shooo";
   else 
   echo "nooo"; 
    }
 function   parseContactNumber ($customerID, $countryCode, $type, $number)
    {
            
    $sql = "INSERT INTO contactNumber  (customerID, countryCode, type, number) values   ('$customerID', '$countryCode', '$type', '$number')";
    
       if ( ls()->get_connection()->query($sql))
   echo "shooo";
   else 
   echo "nooo"; 
    }
    
    
    function parseEmail ($customerId, $email)
    
    {
                   
    $sql = "INSERT INTO email  (customerId, email) values   ('$customerId', '$email')";
    
      if ( ls()->get_connection()->query($sql))
   echo "shooo";
   else 
   echo "nooo"; 
    }
    
    function parseTransaction($customerId, $account,$amount,$type)
 
    {
         $transNumber = 2;
        if ($type == "withdrawal")
        
        {
            
                   
    $sql = "INSERT INTO withdrawal  (transactionNumber, customerId, account,amount,type) values   ('$transNumber','$customerId', '$account','$amount','$type')";
            
        }
        
           if ($type == "deposit")
        
        {
            
                   
    $sql = "INSERT INTO deposit  (transactionNumber, customerId, account,amount,type) values   ('$transNumber','$customerId', '$account','$amount','$type')";
            
        }
        
 if ( ls()->get_connection()->query($sql))
   echo "shooo";
   else 
   echo "nooo"; 
        
    }
    
    function parseCompany ($companyId,$regnumber)
    
    {
          $sql = "INSERT INTO company  (companyId,regnumber)values   ('$companyId','$regnumber')";
    
      if ( ls()->get_connection()->query($sql))
   echo "shooo";
   else 
   echo "nooo"; 
        
    }
 function transfer ($csnumber,$accnumber,$amount,$tocsnumber,$toaccnumber)
    
    {
     $tr = rand(100,47758);
        
      $sql = "
        UPDATE  ACCOUNT
            SET 
            balance =  balance - $amount
            where cunstomerId = $csnumber and accNumber = $accnumber;
      
            UPDATE  ACCOUNT
            SET 
            balance =  balance + $amount
            where cunstomerId = $csnumber and accNumber = $toaccnumber ;
            
            
            INSERT INTO transer  (transactionNumber	, from_customerId, from_account,amount, to_customerId,to_account) values ('$tr','$csnumber','$accnumber','$amount','$tocsnumber','$toaccnumber') ; 
            ";
    
      if ( ls()->get_connection()->query($sql))
   echo "shooo";
   else 
   echo "nooo"; 
        
    }
    
    
 function withdraw ($csnumber,$accnumber,$amount)
    
    {
     
        
      $sql = "
        UPDATE  ACCOUNT
            SET 
            balance =  balance - $amount
            where cunstomerId = $csnumber and accNumber = $accnumber;
      
           
            ";
    
      if ( ls()->get_connection()->query($sql))
   echo "shooo";
   else 
   echo "nooo"; 
        
    }
    
    
}


class retreiveCustomer 
{
    
private $ID;
private $name;
private $surname;
private $dob;
private $company;
private $age;
    
    
    function __construct($ID)
    
    {
        
        $sql = "SELECT * FROM customer where ID =$ID ";
        $result = mysqli_query ($db->get_connection(),$sql);
        $row = mysqli_fetch_array($result);
                
            $this-> ID = $row['ID'];
        	$this->name =  $row['name'];
            $this -> surname = $row['surname'];
            $this -> dob =  $row['dob'];
            $this -> company =  $row['company'];
            $this -> age =  $row['age'];
                 
        
    }
    
    function get_name ()
    {
        return $this->name;
    }
    
    function get_surname ()
    
    {
        return $this->surname;
    }
    
    function get_dob()
    {
        return $this->dob;
    }
    
    function get_company()
    {
        return $this->company;
    }
    
    function get_age()
    {
        return $thsi->age;
    }
}


class retreiveAccount
{
    
    
	private $customerId;
  private   $accNumber;
   private  $type;
   private  $widrawalLimit;
   private  $balance;
   
   function usingCustomerId ($customerId)
   {
       $sql = "SELECT * FROM account where customerId =$customerId ";
        $result = mysqli_query ($db->get_connection(),$sql);
        $row = mysqli_fetch_array($result);
        
        $this->accNumber = $row['accNumber'];
        $this->type = $row['type'];
        $this->widrarawalLimit = $row['withdrawalLimit'];
        $this->balance = $row['balance'];
   }
   
     function usingAccNumber ($caccNumber)
   {
       $sql = "SELECT * FROM account where accNumber =  $accNumber ";
        $result = mysqli_query ($$db->get_connection(),$sql);
        $row = mysqli_fetch_array($result);
        
        $this->customerId = $row['customerId'];
        $this->type = $row['type'];
        $this->widrarawalLimit = $row['withdrawalLimit'];
        $this->balance = $row['balance'];
   }
   
   function get_customerId()
   {
       return $this->customerId;
   }
   
   function get_accNumber ()
   {
       return $this->accNumber;
   }
   function get_type ()
   
   {
       return $this->type;
   }
   
   function get_withdrawalLimit ()
   {
       return $this->withdrawalLimit;
   }
   
   function get_balnce ()
   {
       return $this->balance;
   }
}

class retreiveAddress 
{
    
    private $userId;
	private $type;
    private  $street;
    private $city;
    private  $country;
    
    function __construct($ID)
    
    {
        
        $sql = "SELECT * FROM address where userId =$ID ";
        $result = mysqli_query ($db->get_connection(),$sql);
        $row = mysqli_fetch_array($result);
        
       
        $this->type = $row['type'];
        $this->street = $row['street'];
        $this->city = $row['city'];
        $this->country = $row['country'];
        
        
    }
    
    
    function get_type ()
    {
        return $this->type;
    }
    
    function get_street ()
    {
        return $this->street;
    }
    
    function get_city ()
    {
        return $this->city;
    }
    function get_country ()
    {
        return $this->country;
    }
}

class retreiveContactNumber
{
    	private $customerId;
	private $countryCode;
    private $type;
    private $number;
    
       function __construct($ID)
    
    {
        
        $sql = "SELECT * FROM contactNumber where customerId =$ID ";
        $result = mysqli_query ($db->get_connection(),$sql);
        $row = mysqli_fetch_array($result);
        
        $this ->countryCode = $row['countryCode'];
        $this->type = $row['type'];
        $this->number = $row['number'];
        
    }
    
    
    function get_countryCode ()
    {
        return $this->countryCode;
    }
    
    function get_type ()
    {
        return $this->type;
    }
    function get_number ()
    {
        return $this->number;
    }
}


class retreiveEmail
{
    private $customerId;
    private  $email;
    
    
    
       function __construct($ID)
    
    {
        
        $sql = "SELECT * FROM email where customerId =$ID ";
        $result = mysqli_query ($db->get_connection(),$sql);
        $row = mysqli_fetch_array($result);
        $this->email = $row['email'];

    
}

function get_email()
{
    return $this->email;
}

}


class retreiveTransaction
{
	private $customerId;
	private $transNumber;
	private $account;
	private $amount;
	private $type;
	
       function __construct($transNumber)
    
    {
        
        $sql = "SELECT * FROM transaction where transNumber =$transNumber ";
        $result = mysqli_query ($db->get_connection(),$sql);
        $row = mysqli_fetch_array($result);
        
        $this->customerId = $row['customerId'];
        $this->account = $row['account'];
        $this-> amount = $row['amount'];
        $this->type = $row['type'];
  
    }
    
    function get_customerId()
    {
        return $this->customerId;
    }
        
        function get_account ()
        {
            return $this->account;
        }
        
        function get_amount ()
        {
            return $this->amount;
        }
        
        function get_type()
        {
            return $this->type;
        }
}

class retreiveCompany
{
    
    private $regnumber;
    private $companyId;
	
       function __construct($companyId)
    
    {
        
        $sql = "SELECT * FROM transaction where companyId =$companyId ";
        $result = mysqli_query ($db->get_connection(),$sql);
        $row = mysqli_fetch_array($result);
        
        $this->regnumber = $regnumber;
    
    }   
    
    function get_regnumber ()
    {
        return $this->regnumber;
        
    }
}
?>