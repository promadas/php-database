<?php

$conn=new mysqli("localhost","root","","wtk");

if($conn-> connect_errno)
{
die("connection failed: ".$conn-> connect_errno); 
}
echo "database connect successfully";

?>