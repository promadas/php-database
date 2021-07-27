<?php

include 'DBconnect.php';
function register($firstname,$lastname,$gender,$Dob,$religion,$presentaddress,$permanentaddress,$phone,$email,$username,$password)
{
 $conn=connect();
$sql= $conn->prepare("INSERT INTO users(firstname,lastname,gender,Dob,religion,presentaddress,permanentaddress,phone,email,username,password) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$sql->bind_param("sssssssssss",$firstname,$lastname,$gender,$Dob,$religion,$presentaddress,$permanentaddress,$phone,$email,$username,$password);
$response=$sql->execute();
$conn->close();
return $response;

}
function findUser($username)
    {
        $conn = connect();
        $sql = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $sql->bind_param("s", $username);
        $sql->execute();
        $res = $sql->get_result();
        return $res->num_rows === 1;
    }



?>