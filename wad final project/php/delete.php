<?php

include "dbConn.php"; // Using database connection file here

$email = $_GET['email']; // get id through query string

$del = mysqli_query($db,"delete from customer where email = '$email'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:cusdelete.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>