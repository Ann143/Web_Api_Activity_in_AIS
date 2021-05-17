<?php

include "connection.php";

if (isset($_POST['add'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $link= $_POST['url'];
    $sqlQuery = "INSERT INTO user (username,email,password)
VALUES ('$username', '$email','$password')";
    $result = mysqli_query($conn, $sqlQuery);
    if ($result) {
        echo "Add successfully";
        header("location:".$link);
    } else {
        echo "Error" . mysqli_error($conn);
    }
    $conn->close();
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $link = $_GET['page'];
    $sqlQuery = "DELETE FROM user WHERE userid=$id";
    $result = mysqli_query($conn, $sqlQuery);
    if ($result) {
        echo "Delete Success";
        header("location:".$link);
    } else {
        echo "Error" . mysqli_error($conn);
    }
    $conn->close();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $link= $_POST['url'];
    $sqlQuery = "UPDATE user SET username='".$username."', email='".$email."',password = '".$password."' WHERE userid='".$id."'";

    $result = mysqli_query($conn, $sqlQuery);
    if ($result) {
        echo "Update Success";
        header("location:".$link);
    } else {
        echo "Error";
    }
    $conn->close();
}




if(isset($_GET['user'])) {
    $sqlQuery = "SELECT * FROM user";
    $result = $conn->query($sqlQuery);
    $data= array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}
echo json_encode($data);
}


?>