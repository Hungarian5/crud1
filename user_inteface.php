<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Interface</title>
    <style>
        h1{
    color: rgb(82, 76, 76);
    margin-top: 45px;
}
    body{
        background-color:pink;
    }

table{
    width: 650px;
    margin-top: 40px;
  
    
}
table th{
    border-bottom: 3px solid gray;
    border-right: 3px solod gray;
    color: gray;
    
}
a{
    text-decoration: none;
    color: gray;
    font-weight: 600;
    font-size: 20px;
    transition: 1.2s;
    /* margin-left: 510px; */
    transition-property: color;
}
a:hover{
    color: black;
}
td{
    margin-left: 10px;
  border-bottom: 2px solid rgb(119, 115, 115);
  border-left: 2px solid rgb(119, 116, 116);
  
}
    </style>
</head>
<body>
  <center>
  <h1>CUSTOMERS RECORD</h1>
  <a href="indexx.php" style="margin-left:510px;">ADD RECORD</a>
    <table>
        <thead>
            <tr>
              
                <th>NAME</th>
            
                <th>GENDER</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
                  include 'databasee.php';
                   $result = mysqli_query($dbconn, "SELECT * FROM customers");
                   while($row = mysqli_fetch_array($result)){
                       $i=1;
                       ?>
                       <tr>
                           
                              <td> <?php echo $row["username"]; ?> </td>
                            
                              <td> <?php echo $row["gender"]; ?> </td>
                              <td> <?php echo $row["email"]; ?> </td>
                              <td> <a href="editin.php?id=$user_data[ID]";>Edit</a> 
                              <a href="delete.php?del=<?php echo $row['ID']; ?>">Delete</a>
                             </td>
                            </tr>
                       
                  <?php
                     $i++;
                    }
                  ?>
        </tbody>
    </table>
  </center>
</body>
</html>