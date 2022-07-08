<!DOCTYPE html>
<html>
    <head> 
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Dahara Enterprices Put LTD</title>
  <link rel="stylesheet" href="../home.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
   
</head>


<body>
       <section class="header">
<nav>
    
<div class="nav-links">
<ul>
<li><a href="../cushome.html">HOME</a></li>
<li><a href="../cusabout.html">ABOUT US</a></li>
<li><a href="../cuscontact.html">CONTACT</a></li>
<li><a href="../vieworder.html">VIEW ORDERS</a></li>
<li><a href="../php/cusneworder.php">new order</a></li>
<li><a href="../home.html">LOGINOUT</a></li>
</ul>
    </div>
</nav>
<div>
<br><br>
          <h2 style="color: white;">Customer Orders</h2>

          <table border="5"  bgcolor="yellow" bordercolor="white"  cellspacing="10" >
  <tr>
    <td>order id</td>
    <td> &nbsp CUS email</td>
    <td>cement quantity</td>
    <td> &nbsp cement type</td>
    <td> &nbsp payment type</td>
    <td> &nbsp amount</td>
    
    <td> &nbsp&nbsp Delete</td>
  </tr>

<?php
include_once('connection.php');
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $email= $username=test_input($_POST["req2"]);
}

include "dbconn.php"; // Using database connection file here

$records = mysqli_query($db,"SELECT * FROM `cus_orders` WHERE cus_email='$email' " ); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['cusorder_id']; ?></td>
    <td>&nbsp<?php echo $data['cus_email']; ?></td>
    <td>&nbsp&nbsp&nbsp<?php echo $data['cement_quantity']; ?></td>  
    <td><?php echo $data['cement_type']; ?></td>   
    <td>&nbsp&nbsp&nbsp&nbsp<?php echo $data['Payment_type']; ?></td>  
    <td><?php echo $data['amount']; ?></td> 
    <td> &nbsp<a href="cusdelecus.php?cusorder_id=<?php echo $data['cusorder_id']; ?>">Delete</a></td>
  </tr>
	
<?php
}
?>
</table>
</div>


        <!---footer-->
       
        <footer>
  
  <div class="container">
      <div class="sec img">
          <img src="../image/web/Dhara logo.png" alt="" width="200px" height="200px">

      </div>
      <div class="sec aboutus">
          <h2>Follow Us On:</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minima obcaecati fugit iste soluta fuga tenetur quasi labore dolorem, quos dolor quidem, molestias qui voluptate odit voluptas esse nam mollitia?</p>
          <ul class="sci">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
  
          </ul>
      </div>
      <div class="sec quicklinks">
          <h2>Help</h2>
          <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">AboutUs</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Feedback</a></li>
          </ul>
          </div>
          <div class="sec Address">
              <h2>Address</h2>
              <ul class="info">
                  <li>
                      <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                      <span> 8/B <br> Main street <br> Hambantota</span>
                  </li>
                  <li>
                      <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                      <p><a href="#">+94 071 5866 800</a> <br>
                          <a href="#">+94 071 5866 800</a> 
                      </p>
                  </li>
                  <li>
                      <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                      <p><a href="#">daharaenterprises@gmail.com</a></p>
                  </li>
              </ul>
          </div>
          
  </div>
</footer>
    </body>
</html>