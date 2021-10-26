
<?php

include 'Query.php';

 $send = new sendData();
function lk ()
    
{
    
 $send = new sendData();
    return $send;
}
class Customer 
{

public $ID;
public $name;
public $surname;
public $dob;
public $company;
public $age;
 function ssubmit()
 { 
 $send = lk();
      $send->parseCustomer  ($this->ID,$this->name,$this->surname,$this->dob,$this->company,$this->age);
 }
    
    function __construct ($ID,$name,$surname,$dob,$company,$age)
{
	$this -> ID = $ID; 
	$this->name = $name;
    $this -> surname = $surname;
    $this -> dob = $dob;
    $this -> company = $company;
    $this -> age = $age;
     //ssubmit();
        
 $send = lk();
      $send->parseCustomer  ($this->ID,$this->name,$this->surname,$this->dob,$this->company,$this->age);
    }

function set_customer ($ID,$name,$surname,$dob,$company,$age)
 {
	 $this -> ID = $ID;
	 $this->name = $name;
     $this -> surname = $surname;
     $this -> dob = $dob;
     $this -> company = $company;
     $this -> age = $age;
ssubmit();
 }
 
 
}

class Account extends Customer

{
   public $customerId;
   public   $accNumber;
   public  $type;
   public $widrawalLimit;
   public $balance;
      function submit()
    {
          $send = lk();
        $send->parseAccount ($this->cunstomerId, $this->accNumber, $this->type, $this->widrawalLimit,$this->balance );
    }
        
    function __construct ($id,$accNumber, $type, $widrawalLimit, $balance)
    
    {
    	$this->customerId = $this->ID;
        $this -> accNumber = $accNumber;
        $this ->type  = $type;
        $this ->widrawalLimit = $widrawalLimit;
        $this->balance = $balance;
        // submit();
        
          $send = lk();
        $send->parseAccount ($id, $this->accNumber, $this->type, $this->widrawalLimit,$this->balance );
    }
    
    function set_Account ($accNumber, $type, $widrawalLimit )
    
    {
    	$this->customerId = $this->ID;
        $this -> accNumber = $accNumber;
        $this ->type  = $type;
        $this -> widrawalLimit = $withdrawalLimit;
        $this -> balance =  0;
         submit();
    
    }
    
  
}

class Address extends Customer 

{
	public $userId;
	public $type;
    public $street;
    public $city;
    public $country;
      
    function __construct ($id,$type, $street, $city , $country)
    
    {
    	$this-> userId = $this-> ID;
        $this->type = $type;
        $this->street = $street;
        $this->city = $city;
        $this->country = $country;
        //submit();
        
          $send = lk();
    $send->parseAddress ($id, $this->type, $this->street, $this->city , $this->country);

        
    
    }
    
    function set_address ($id,$type, $street, $city , $country)
    
    {
    	$this-> userId = $this-> ID;
        $this->type = $type;
        $this->street = $tstreet;
        $this->city = $city;
        $this->country = $country;
    //submit();
        
    $send = lk();
    $send->parseAddress ($Id, $this->type, $this->street, $this->city , $this->country);

    }
	
function submit ()
{
     $send->parseAddress ($this->useId, $this->type, $this->street, $this->city , $this->country);
}
}

class ContactNumber extends Customer 
{

	public $customerId;
	public $countryCode;
    public $type;
    public $number;


function __construct ($id,$countryCode, $type, $number)
{
	$this->customerNumber = $this->ID;
    $this->countryCode = $countryCode;
    $this->type = $type;
    $this->number = $number;
    //submit();
    $send = lk();
    $send->parseContactNumber ($id, $this->countryCode, $this->type, $this->number);
    
}


function set_contactNumber ($countryCode, $type, $number)
{
	$this->customerNumber = $this->ID;
    $this->countryCode = $countryCode;
    $this->type = $type;
    $this->number = $number;
    submit();
}

function submit ()
{
    $send->parseContactNumber ($this->customerNumber, $this->countryCode, $this->type, $this->number);
}
}


class Email extends Customer 
{
	public $customerId;
    public $email;
    
    function __construct ($id,$email)
    
    {
    	$this->customerId = $this->ID;
        $this->email = $email;
        //submit();
        $send = lk();
        
        $send->parseEmail ($id, $this->email);
    }
    
     function set_email ($email)
    
    {
    	$this->customerId = $this->ID;
        $this->email = $email;
    submit();
    }
    
    private function submit ()
    {
        $send->parseEmail ($this->customerId, $this->email);
    }
}

class Transaction 
{
    public $transactionNumber;
	public $customerId;
	public $account;
	public $amount;
	public $type;

function set_transaction ($id,$transnumber,$account,$amount,$type)

{
    $this->customerId = $id;
    $this->account = $account;
    //$this->$transactionNumber = $transnumber;
    $this->amount = $amount;
    $this->type = $type;
    //submit();
    
    $send = lk ();
    
    $send->parseTransaction($this->customerId, $this->account,$this->amount,$this->type);
}

private function submit ()
{
    $send->parseTransaction($this->transNumber,$this->customerId, $this->account,$this->amount,$this->type);
}


}

class Company

{
    public $regnumber;
    public $companyId;
    
    function __consruct ($companyId,$regnumber)
    
    {
        $this->companyId = $companyId;
        $this->regnumber = $regnumber;
        //submit();
        $send = lk();
        
        $send->parseCompany ($this->companyId,$this->regnumber);
    }
    
     function set_company ($companyId,$regnumber)
    
    {
        $this->companyId = $companyId;
        $this->regnumber = $regnumber;
        submit();
    }
    
    private function submit()
    {
        $send->parseCompany ($this->companyId,$this->regnumber);
    }
}


class Transfer 
{
   function __constructor ($csnumber,$accnumber,$amount,$tocsnumber,$toaccnumber)
   {
       $send->transfer($csnumber,$accnumber,$amount,$tocsnumber,$toaccnumber);

       
   }
}
 
    
class Withdraw 
{
   function __constructor ($csnumber,$accnumber,$amount)
   {
       $send->withdraw($csnumber,$accnumber,$amount);

       
   }
}

?>
