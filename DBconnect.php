<?php
function connect(){
$conn=new mysqli("localhost","proma","123","wtg");

if($conn-> connect_errno)
{
die("connection failed: ".$conn-> connect_errno); 
}
return $conn;
}

?>