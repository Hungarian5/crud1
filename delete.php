<?php 
session_start();
include_once("databasee.php"); 

if(isset($_GET['del'])){
    $id = $_GET['del']; 

    mysqli_query($dbconn, "DELETE FROM customers WHERE ID=$id");

header("Location:user_inteface.php"); 
}

?>