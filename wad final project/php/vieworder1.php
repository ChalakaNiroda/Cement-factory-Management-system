<?php

include "dbConn.php"; // Using database connection file here

$agentorderid = $_GET['agentorder_id']; // get id through query string

$del = mysqli_query($db,"DELETE FROM `agents_order` WHERE agentorder_id='$agentorderid'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:vieworder.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>