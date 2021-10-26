<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      
      <link rel="stylesheet" href="style.css" >

    <title>bank management system</title>
  </head>
    <script>
        
        function change(y)
                         
                         {
                                 
                                         for (var x = 1; x<10 ; x++)
                                             {
                                                 
                                           
                                         if (y==x)
                                             
                                  {
                                      
                                  document.getElementById('m'+x).style.display='block' ; 
                                      
                                  }
                                                 
                                                 else 
                                                     {
                                                         
                                                     
                                    document.getElementById('m'+x).style.display='none' ;
                                     }
                         
                                             }
                         
                         } 
    </script>
  <body>
      
      <section id = "top">
      
      <div class = "center" id ="bank_txt">
   <b>  BANK MANAGEMENT SYSTEM </b>
          <br> 
          <small> admin</small>
      </div>
      
      </section>
       <div class = "picture">
      <img src="proff.jpg" > 
      </div>
      <div class = "center" >
      <b> <?php
    echo date("F j, Y, g:i a");
?></b>
      </div>
      
        <form action="controler.php" method="post" >  
            
            
            
            
    <div class="main_box" id = "m2">
      <div class = "fill">
          <div id = "label">
          Customer Name:
          </div>
          
          
          <input id  = "input"  type="text" name= "customer_name">
          
         
          </div>
               <div class = "fill">
          <div id = "label">
          Surname:
          </div>
          
          
          <input id  = "input"  type="text" name= "customer_surname">
          
         
          </div>
           <div class = "fill">
          <div id = "label">
          Customer number:
          </div>
          
          
          <input id  = "input"  type="text" name= "customer_number">
          
         
          </div>
          
           <div class = "fill">
          <div id = "label">
          Account title:
          </div>
          
          
          <input id  = "input"  type="text" name= "account_title">
          
         
          </div>
          
            
           <div class = "fill">
          <div id = "label">
          Account typer:
          </div>
          
          
          <input id  = "input"  type="text" name= "account_type">
          
         
          </div>
          
          
        
           <div class = "fill">
          <div id = "label">
          Gender:
          </div>
          
          
          <input id  = "input"  type="text" name= "gender">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Date of birth:
          </div>
          
          
          <input id  = "input"  type="text" name= "dob">
          
         
          </div>
          
            
           <div class = "fill">
          <div id = "label">
          Nationality:
          </div>
          
          
          <input id  = "input"  type="text" name= "nationality">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Postal address:
          </div>
          
          
          <input id  = "input"  type="text" name= "address">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Phone number:
          </div>
          
          
          <input id  = "input"  type="text" name= "phone_number">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          NIC number:
          </div>
          
          
          <input id  = "input"  type="text" name= "nic_number">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Email address:
          </div>
          
          
          <input id  = "input"  type="text" name= "email">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Company name:
          </div>
          
          
          <input id  = "input"  type="text" name= "company_name">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Ocupation:
          </div>
          
          
          <input id  = "input"  type="text" name= "ocupation">
          
         
          </div>
           <div class = "fill">
          <div id = "label">
          Initial deposit:
          </div>
          
          
          <input id  = "input"  type="text" name= "initialDeposit">
          
         
          </div>
            <button id  = "submit"  name ="submit1" class = "fill">
        create
          </button>
      </div>
            
            
            
      </form>
      
      <!--       ----START----    -->
             <form action="admin.php" method="post" > 
      <div class="main_box" id = "m1">  
       
      
      <div class = "fill">
          <div id = "label">
          Customer Number:
          </div>          
          <input id  = "input"  type="text"  name = "customer_number">
          </div>
                 
      <div class = "fill">
          <div id = "label">
          Account Number:
          </div>          
          <input id  = "input"  type="text" name= "account_number">
          </div>          
          
           
        
          
   <button id  = "submit" class = "fill" name = "submit5">
     search customer
          </button>
          
          
          <div id ="cusdetails">
          
              <?php
              
include 'search.php';
              
              if (isset($_POST['submit5']))
              {
                  echo '<hr>';
                  
                      $id = $_POST['customer_number'];
                  if ($id != 0 )
                  {
                  $data = new search($id);
                    
                      echo '
                      
                        <br>
                        customer number: '.$id.'
                        <br>
                        name: '.$data->get_name($id).'
                        <br>
                        surname: '.$data->get_surname($id).'
                      
                        <br>
                        dob: '.$data->get_dob($id).'
                      
                        <br>
                        company: '.$data->get_company($id).'
                      
                        <br>
                        age: '.$data->get_age($id).'
                      
                      
                      ';
                  
                  }
                  
                  else 
                  {
                      echo '<br> no search results ';
                  }
              }
              ?>
          <br>
              <hr>
          </div>
      </div>
      
      </form>
      <!--       ----end-----    -->
      
      
      
      
    
                    <form action="controler.php" method="post" >  

      <div class="main_box" id = "m3">
      
 
      <div class = "fill">
          <div id = "label">
          Customer Id:
          </div>          
          <input id  = "input"  type="text" name= "customer_id">
          </div>
                 
      <div class = "fill">
          <div id = "label">
          Account title:
          </div>          
          <input id  = "input"  type="text" name= "account_title">
          </div>
       
      <div class = "fill">
          <div id = "label">
          Deposit amount:
          </div>          
          <input id  = "input"  type="text" name= "Deposit">
          </div>
   <button id  = "submit" name = "submit2" class = "fill">
        deposit
          </button>

      </div>
      </form>
      
      
      <!--       ----START----    -->
                    <form action="controler.php" method="post" >  

      <div class="main_box" id = "m4">
      
       <h4 style="color:white;"> From</h4>
      <div class = "fill">
          <div id = "label">
          Customer Number:
          </div>          
          <input id  = "input"  type="text" name= "customer_number">
          </div>
                 
      <div class = "fill">
          <div id = "label">
          Account Number:
          </div>          
          <input id  = "input"  type="text" name= "acc_number">
          </div>
       
      <div class = "fill">
          <div id = "label">
          NIC Number:
          </div>          
          <input id  = "input"  type="text" name= "nic_number">
          </div>
          
          
             <div class = "fill">
          <div id = "label">
          Ammount:
          </div>          
          <input id  = "input"  type="label" name= "amount" placeholder="$ 3920394">
          </div>
          
        <h4 style="color:white;"> To</h4>
      <div class = "fill">
          <div id = "label">
          Customer Number:
          </div>          
          <input id  = "input"  type="text" name= "customer_number2">
          </div>
                 
      <div class = "fill">
          <div id = "label">
          Account Number:
          </div>          
          <input id  = "input"  type="text" name= "acc_number2">
          </div>
       
      <div class = "fill">
          <div id = "label">
          NIC Number:
          </div>          
          <input id  = "input"  type="text" name= "nic_number2">
          </div>
          
        
          
          
   <button id  = "submit" class = "fill" name = "submit3">
        transfer
          </button>
      </div>
      
                    </form>
      
      <!--       ----end-----    -->
      
      <!--       ----START----    -->
                          <form action="controler.php" method="post" >  

      <div class="main_box" id = "m5">
      
      <div class = "fill">
          <div id = "label">
          Customer Number:
          </div>          
          <input id  = "input"  type="text" name= "customer_number">
          </div>
                 
      <div class = "fill">
          <div id = "label">
          Account number:
          </div>          
          <input id  = "input"  type="text" name= "account_number">
          </div>
      
        
           <div class = "fill">
          <div id = "label">
          Withdrawal ammount:
          </div>          
          <input id  = "input"  type="text" name= "withdraw">
          </div>
          
   <button id  = "submit" class = "fill" name = "submit4">
        withdraw
          </button>
      </div>
      
      </form> 
      
      <!--       ----end-----    -->
      
         <!--       ----START----    -->
             <form action="controler.php" method="post" >  
      <div class="main_box" id = "m6">
      
      <div class = "fill">
          <div id = "label">
          Customer Number:
          </div>          
          <input id  = "input"  type="text"  name = "customer_number">
          </div>
                 
      <div class = "fill">
          <div id = "label">
          Account Number:
          </div>          
          <input id  = "input"  type="text" name= "account_number">
          </div>          
          
           
        
          
   <button id  = "submit" class = "fill" name = "submit5">
      check
          </button>
      </div>
      
      </form>
      <!--       ----end-----    -->
      
      
      <!--       ----START----    -->
              <form action="controler.php" method="post" >  

      
      <div class="main_box" id = "m7">
      
      <div class = "fill">
          <div id = "label">
          Customer Name:
          </div>
          
          
          <input id  = "input"  type="text" name= "customer_name">
          
         
          </div>
            
      <div class = "fill">
          <div id = "label">
          Customer surname:
          </div>
          
          
          <input id  = "input"  type="text" name= "customer_sname">
          
         
          </div>
          
            
           <div class = "fill">
          <div id = "label">
          Customer number:
          </div>
          
          
          <input id  = "input"  type="text" name= "customer_number">
          
         
          </div>
          
           <div class = "fill">
          <div id = "label">
          Account title:
          </div>
          
          
          <input id  = "input"  type="text" name= "account_title">
          
         
          </div>
          
            
           <div class = "fill">
          <div id = "label">
          Account typer:
          </div>
          
          
          <input id  = "input"  type="text" name= "account_type">
          
         
          </div>
          
          
        
           <div class = "fill">
          <div id = "label">
          Gender:
          </div>
          
          
          <input id  = "input"  type="text" name= "gender">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Date of birth:
          </div>
          
          
          <input id  = "input"  type="text" name= "dob">
          
         
          </div>
          
            
           <div class = "fill">
          <div id = "label">
          Nationality:
          </div>
          
          
          <input id  = "input"  type="text" name= "nationality">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Postal address:
          </div>
          
          
          <input id  = "input"  type="text" name= "address">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Phone number:
          </div>
          
          
          <input id  = "input"  type="text" name= "phone_number">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          NIC number:
          </div>
          
          
          <input id  = "input"  type="text" name= "nic_number">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Email address:
          </div>
          
          
          <input id  = "input"  type="text" name= "email">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Company name:
          </div>
          
          
          <input id  = "input"  type="text" name= "company_name">
          
         
          </div>
            
           <div class = "fill">
          <div id = "label">
          Ocupation:
          </div>
          
          
          <input id  = "input"  type="text" name= "ocupation">
          
         
          </div>
           <div class = "fill">
          <div id = "label">
          Initial deposit:
          </div>
          
          
          <input id  = "input"  type="text" name= "deposit">
          
         
          </div>
            <button id  = "submit" class = "fill">
        create
          </button>
          
          
      </div>
          </form>
      
      
      
      <!--       ----end-----    -->
      
      
      <!--       ----START----    -->
      
      
      <div class="main_box" id = "m8" style = "overflow-y: scroll;">
          
          <table class="table table-dark" style = "position: absolute; left:  5%;" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">cumstomerId</th>
      <th scope="col">accNumber</th>
      <th scope="col">type</th>
      <th scope="col">  withdrawlLimit </th>
      <th scope="col"> balance  </th>
    </tr>
  </thead>
  <tbody>
      <?php 
      
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname="bank"; 
            
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
    $sql = " select * from account where cunstomerId ";
    $result = mysqli_query ($conn,$sql);
    while ($row = mysqli_fetch_array ($result))
           {
     
               echo '   
      
       <tr>
      <th scope="row">'.$row['control'].'</th>
      <td>'.$row['cunstomerId'].'</td>
      <td>'.$row['accNumber'].'</td>
      <td> '.$row['type'].'</td>
      <td> '.$row['widrawalLimit'].'</td>
      <td> '.$row['balance'].'</td>
    </tr>
      
      ';
      
           }
      
      ?>
   
  </tbody>
</table>
          
      </div>
      
      <!--       ----end-----    -->
      
      
     
      <!--       ----START----    -->
<form action="controler.php" method="post" >  


      <div class="main_box" id = "m9">
          
          
      <div class = "fill">
          <div id = "label">
          Customer Number:
          </div>          
          <input id  = "input"  type="text" name= "customer_number">
          </div>
                 
             <div class = "fill">
          <div id = "label">
          Account number :
          </div>          
          <input id  = "input"  type="label" name= "account_number" placeholder="$ 3920394">
          </div>
        
          
   <button id  = "submit" class = "fill" name = "submit6">
      check
          </button>
          
      </div>
    
      </form>
      <!--       ----end-----    -->
      
      
      
      <section id ="opt_box">
      <div id = "side_top">
          <img src="icon.png">
          
          </div>
          <div class = "btn" >
          
          <button  onclick = "change(1)" id = "button"> search account</button>
          <button  onclick = "change(2)" id = "button"> create new account  </button>
          <button onclick = "change(3)"  id = "button"> deposit  </button>
          <button onclick = "change(4)"  id = "button"> transfer </button>
          <button  onclick = "change(5)"  id = "button"> widthdraw  </button>
          <button  onclick = "change(6)" id = "button"> check balance</button>
          <button  onclick = "change(7)"  id = "button"> update account details </button>
          <button  onclick = "change(8)" id = "button"> list accounts  </button>
          <button  onclick = "change(9)" id = "button"> transactions </button>
          </div>
      
      </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>