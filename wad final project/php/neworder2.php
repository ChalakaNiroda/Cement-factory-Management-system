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
            $sql= "INSERT INTO `agents_order`(`cement_quantity`, `cement_type`, `check_no`, `agent_email`, `total`) VALUES ('$quantity','$cement','$checkno','$email','$total');";
            $con->query($sql);
           header("Location: ../oerderhome.html");

        

        
    
}

?>