<?php
     $servername = "localhost";
     $username   = "root";
     $password    = "";
     $dbname     = "company";

    //  Connection
    $dbconn = mysqli_connect($servername,$username,$password,$dbname);
  if($dbconn == false){
      die("ERROR: Failed To Connect: " . mysqli_connect_error());
  }




?>
