<?php
include_once('connection.php');
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $cementname=test_input($_POST["req1"]);
    $buyingprice = test_input($_POST["req2"]);
    $sellingprice = test_input($_POST["req3"]);
   

    $stmt = $conn->prepare("SELECT * FROM `cement_detail`");
    $stmt->execute();
    $users = $stmt->fetchAll();
    foreach($users as $user) {
          
        if($user['req1'] == $cementname) 
            {
                echo "<script language='javascript'>";
                echo "alert('already cement exist')";
                echo "</script>";
                die();
        }
        else {

            $con= new mysqli("localhost","root","","wad");
            if($con->connect_error)
            {

                echo "failed".$con->connect_error;

            }
            $sql= "INSERT INTO `cement_detail` (`cement_name`, `buying_price`, `selling_price`) VALUES ('$cementname', '$buyingprice', '$sellingprice');";
            $con->query($sql);
           
           header("Location: ../adminhome.html");

        

        }
    }
}

?>