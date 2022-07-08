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
    $checkno=test_input($_POST["check"]);
    $total=test_input($_POST["total"]);

   

            $con= new mysqli("localhost","root","","wad");
            if($con->connect_error)
            {

                echo "failed".$con->connect_error;

            }
            $sql= "INSERT INTO `cus_orders`( `cus_email`, `cement_quantity`, `cement_type`, `Payment_type`, `amount`) VALUES ('$email','$quantity','$cement','$checkno','$total');";
            $con->query($sql);
           header("Location: ../cushome.html");

        

        
    
}

?>