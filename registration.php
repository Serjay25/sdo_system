<?php
    include "db_conn.php";
    if (isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['Password'];
        $usertype = $_POST['usertype'];

        $sql = "INSERT INTO `users`(`fullname`, `username`, `password`, `usertype`) VALUES ('$fullname','$username','$password','$usertype')";

        $result = mysqli_query($conn, $sql,);

        if ($result) {
            header("Location:registration.php?msg=New user was added successfully");
        }
            else {
                echo "Failed: " . mysqli_error($conn);
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
    
    <title>Registration</title>
</head>
<body>



    <form method="POST" action="registration.php" >
        <div class="container col-md-3 mt-5 text-center">
            <center>
                <img class="mt-5" src="LOGO.JPG" height="100" width="100"> <br></center>
                    Please Sign in
                
                    <label for="username" class="font-weigth-bold mr-auto">
                    Name
                </label>
                <input type="text" name="fullname" class="form-control mb-3" placeholder="Enter Full name" require="">

                <label for="username" class="font-weigth-bold mr-auto">
                    Username
                </label>
                <input type="text" name="username" class="form-control mb-3" placeholder="Username" require="">

                </h1>
                <label for="password" class="font-weigth-bold mr-auto">
                    Password
                </label>
                <input type="Password" name="Password" class="form-control mb-3" placeholder="Password" require=""> 

                <div class="form-group mb-3">
                    <label for="">User type</label> &nbsp;<br>
                    <input type="radio" class="form-check-input" name="usertype" id="user" value="User">User</input>&nbsp;
                    
                       <br> &nbsp;
                    <input type="radio" class="form-check-input" name="usertype" id="admin" value="Admin">Admin</input>
                </div>
                
                
                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit"> 
                    Sign in
                </button>
        </div>
    </form>
    <p class="text-center"> Click <a href="index.php">here</a> to log in.</p>
</body>
</html>