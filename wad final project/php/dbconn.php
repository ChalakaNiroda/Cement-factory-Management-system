<?php

$db = mysqli_connect("localhost","root","","wad");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>