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
    
    
    function __construct () //default values 
    {
        $this->host = "localhost";
$this->dbusername = "root";
$this->dbpassword ="";
$this->dbname="bank";
//connection();
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

?>