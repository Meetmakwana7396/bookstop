<?php
include "databaseconnection.php";

    $pid = $_POST['pid'];

        // die("vhenbhod");
        $sql = "DELETE FROM `cartTB` WHERE `productid` = $pid";
        $output = mysqli_query($conn, $sql) or die("operation failed");
 
       
        // $status = unlink('./image/'.$output2);
        if($output)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
?>