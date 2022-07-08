<?php
 
include_once('connection.php');
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $email=test_input($_POST["email"]);
    $quantity=test_input($_POST["quantity"]);
    $cement=test_input($_POST["type"]);
    $payment=test_input($_POST["paytype"]);

    
  
    include "dbconn.php"; // Using database connection file here
    $records = mysqli_query($db,"  SELECT `selling_price` FROM `cement_detail` WHERE cement_name='$cement'"); // fetch data from database
  $data = mysqli_fetch_array($records);
  $selling_price=$data['selling_price'];
  $total=(int)$selling_price*(int)$quantity;

echo" <form action='cusneworder2.php' method='post'> <br>
email =<input type='text' name='email' value='$email'><br>
Cement Type =<input type='text' name='type' value='$cement'><br>
quantity=<input type='text' name='quantity' value='$quantity'><br>
total bill =<input type='text' name='total' value='$total'><br>
enater check no=<input type='text' name='check' value='$payment'><br>
<button >Place order</button><br>
<button ><a href='../cushome.html'>CANCEL</a></button><br>
</form>

";

}



?>
 