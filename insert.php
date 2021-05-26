<?php
include "connection.php";
$name=$_POST['name'];

$email=$_POST['email'];

$github=$_POST['github'];

$sql="INSERT INTO `ajax` (`Name`, `Email`,`GitHub`) VALUES ('$name', '$email','$github')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
?>