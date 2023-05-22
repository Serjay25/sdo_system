<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdo_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn===false) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["Password"];

    $sql="SELECT * FROM users where username='".$username."' and password ='".$password."'";

    $result = mysqli_query($conn,$sql);

    $row= mysqli_fetch_array($result);
    if($row["usertype"]=="Admin") {
            header("Location:maindashboard.php");
        }
            

        elseif($row["usertype"]=="User"){
            header("Location:itemsdashboard.php");
        }
        else{
            echo "username or password is incorrect";
        }


}

?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>SDO Santiago Inventory System</title>
</head>
<body>
    <form action="" method="POST">
        <div action="" class="container col-md-3 mt-5 text-center">
            <center>
                <img class="mt-5" src="LOGO.JPG" height="100" width="100">
                </center>
                <h1 class="h3 mb-3 font-weight-normal text-center"> 
                    Please Log in
                </h1>
                <label for="username" class="font-weigth-bold mr-auto">
                    Username
                </label>
                <input type="text" name="username" class="form-control mb-3" placeholder="Username" require="">

                </h1>
                <label for="password" class="font-weigth-bold mr-auto">
                    Password
                </label>
                <input type="Password" name="Password" class="form-control mb-3" placeholder="password" require="">

                

                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit"> 
                    Sign in
                </button>

               
                
                <a href="registration.php" class="btn btn-lg btn-success btn-block" name="submit" type="submit"> 
                    Register
                </a>
                
        </div>
    </form>
</body>
</html>