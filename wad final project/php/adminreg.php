<?php
include_once('connection.php');
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $username=test_input($_POST["req1"]);
    $password = test_input($_POST["req3"]);
    $email = test_input($_POST["req2"]);
    $idno = test_input($_POST["req4"]);
    $tel = test_input($_POST["req5"]);

    $stmt = $conn->prepare("SELECT * FROM customer");
    $stmt->execute();
    $users = $stmt->fetchAll();
    foreach($users as $user) {
          
        if($user['req3'] == $email) 
            {
                echo "<script language='javascript'>";
                echo "alert('email already used')";
                echo "</script>";
                die();
        }
        else {

            $con= new mysqli("localhost","root","","wad");
            if($con->connect_error)
            {

                echo "failed".$con->connect_error;

            }
            $sql= "INSERT INTO `agents` (`email`, `password`, `user_name`, `tele`, `id_no`) VALUES ('$email', '$password', '$username', '$tel', '$idno');";
            $con->query($sql);
           header("Location: ../adminhome.html");

        

        }
    }
}

?>