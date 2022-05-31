<?php 
include_once("databasee.php"); 
if(isset($_POST['update'])) 
{ 
    $id = $_POST['ID']; 
    $username=$_POST['username']; 
    $gender=$_POST['gender']; 
    $email=$_POST['email'];


    $result = mysqli_query($mysqli, "UPDATE customers SET username='$username', gender='gender', email='$email' WHERE ID=$id"); 
    
    header("Location: user_inteface.php"); } ?> <?php  
    
    $id = $_GET['id']; 
    $result = mysqli_fetch_array($dbconn, "SELECT * FROM customers WHERE ID=$id");
   // var_dump($result);
    while($user_data = mysqli_fetch_array($result)) 
    {
        $username = $user_data['username']; 
        $gender = $user_data['gender']; 
        $email = $user_data['email']; 
        } 
        ?> 
       