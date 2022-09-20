<?php
session_start();
function display_books()
{
    $user_id = $_SESSION['userid'];
    include "databaseconnection.php";
    $sql = "SELECT * FROM cartTB WHERE userid = $user_id";
    $output = mysqli_query($conn, $sql);
    if (mysqli_num_rows($output) > 0) {
        $products = array();
        while ($rows = mysqli_fetch_assoc($output)) {
            $products[] = $rows;
            
        }
        $res = array("data"=>$products);
        echo json_encode($res);
    }

}
display_books();
?>        