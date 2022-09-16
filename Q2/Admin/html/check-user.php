<?php

include "databaseconnection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `userTB` WHERE `username` = '$username' and `password` = '$password' ";
    $result = mysqli_query($conn , $sql);

    if($output = mysqli_num_rows($result)>0){
        echo 1;
    }
    else if($username == "" || $password==""){
        echo 0;
    }
    else{
        echo 2;
    }
