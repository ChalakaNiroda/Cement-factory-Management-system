<?php

include "dbConn.php"; // Using database connection file here

$cusid = $_GET['cusorder_id']; // get id through query string

$del = mysqli_query($db,"DELETE FROM `cus_orders` WHERE cusorder_id='$cusid'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:../cushome.html"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>