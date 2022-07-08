<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.9.0-->
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
  <link rel="stylesheet" href="css/admin.css">

</head>

<body class="myDIV">

  <!-- START NAV -->
  <nav class="navbar is-white">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item brand-text" href="../adminhome.html">
          Admin
        </a>
        <div class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="../adminhome.html">
            Home
          </a>
          <a class="navbar-item" href="../oerderhome.html">
            Orders
          </a>
         
          <a class="navbar-item" href="../home.html">
            LOGOUT
          </a>

        </div>

      </div>
    </div>
  </nav>
  <!-- END NAV -->
  <div class="container">
    <div class="columns">
      <div class="column is-3 ">
        <aside class="menu is-hidden-mobile">
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li><a href="../oerderhome.html" class="is-active">ORDER</a></li>
            <li><a href="cusorder.php">Customers Orders</a></li> 
            <li><a >orders to factory</a>
              <ul><a href="vieworder.php">view order</a></ul>
            <ul><a href="neworder.php">new order</a></ul>
            </li>
          

            
         
          </ul>
         
          <ul class="menu-list">
            
           
          
        
          
            <li><a href="../home.html">  logout</a></li>
          </ul>
          
        </aside>
      </div>
    <div>

    
    <br><br>
          <h2>Customer Orders</h2>

<table border="2">
  <tr>
    <td>order id</td>
    <td>cus email</td>
    <td>cement quantity</td>
    <td>cement type</td>
    <td>payment type</td>
    <td>amount</td>
    
    <td>Delete</td>
  </tr>

<?php

include "dbconn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT * FROM `cus_orders`"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['cusorder_id']; ?></td>
    <td><?php echo $data['cus_email']; ?></td>
    <td><?php echo $data['cement_quantity']; ?></td>  
    <td><?php echo $data['cement_type']; ?></td>   
    <td><?php echo $data['Payment_type']; ?></td>  
    <td><?php echo $data['amount']; ?></td> 
    <td><a href="cusorder1.php?cusorder_id=<?php echo $data['cusorder_id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

    </div>
    </div>
  </div>
  

</body>

</html>