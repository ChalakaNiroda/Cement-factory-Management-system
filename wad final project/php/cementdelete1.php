<?php

include "dbConn.php"; // Using database connection file here

$cementid = $_GET['Cement_id']; // get id through query string

$del = mysqli_query($db,"delete from cement_detail where Cement_id = '$cementid'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:cementdelete.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>