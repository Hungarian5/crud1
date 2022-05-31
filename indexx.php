<?php
     include 'databasee.php';
     
     if(count($_POST)>0){
        if($_POST['submit']){
            $username = $_POST['username'];
            $password1 = $_POST['password1'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];

            $sql = "INSERT INTO `customers`(`username`,`password1`,`gender`,`email`) VALUES('$username','$password1','$gender','$email')";
            if(mysqli_query($dbconn, $sql))
            {
               //  echo "Data Inserted Successfully";
               header("Location: user_inteface.php");
            }else{
                die("Failed To Insert Data: " . mysqli_connect_error());
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>
    <style>
        fieldset{
            width: 400px;
            height: 400px;
            margin-top: 50px;
            border-radius: 50px;
            border: 2px solid gray;
        }
        legend{
            text-align: center;
            font-size: 18px;
            color: gray;
        }
        input{
            margin-top: 20px;
        }
        body{
            background-color: palegreen;
        }
        a{
            text-decoration: none;
            font-size: 22px;
            font-weight: 600;
        }
        a:hover{
            color: black;
        }
    </style>
</head>
<body>
   <center>
       <fieldset>
           <legend>Register Here</legend>
           <form method="POST">
        <table>
            <tr>
                <td>Customer Name :</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>password :</td>
                <td><input type="password" name="password1" required></td>
            </tr>
            <tr>
                <td>gender :</td>
                <td>
                    <input type="radio" name="gender" value="m" required>male
                    <input type="radio" name="gender" value="f" required>female
                </td>
            </tr>
            <tr>
                 <td>Email :</td>
                 <td><input type="email" name="email" required></td>
           </tr>
           
          
           <tr>
               <td><input type="submit" name="submit" value="submit"></td>
           </tr>
        </table>
    </form>
       </fieldset>
       <a href="user_inteface.php">SEE THE LIST OF CUSTOMERS</a>
   </center>
</body>
</html>