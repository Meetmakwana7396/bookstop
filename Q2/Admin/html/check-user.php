<?php
session_start();
include "databaseconnection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "admin" && $password == "admin123") {
        echo "admin";
    }

    $sql = "SELECT * FROM `userTB` WHERE `username` = '$username' and `password` = '$password' ";
    $result = mysqli_query($conn , $sql);

    if(mysqli_num_rows($result)>0){
        $rows = mysqli_fetch_assoc($result);
        $_SESSION["userid"] = $rows['id'];
        echo 1;
    }
    else if($username == "" || $password==""){
        echo 0;
    }
    else{
        echo 2;
    }
?>