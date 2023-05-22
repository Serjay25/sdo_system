  <?php
    include "test.php";
     if(isset($_POST['submit'])){
    
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gmail = $_POST['email'];
        $gender = $_POST['gender'];

        $sql= "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `gmail`, `gender`) VALUES (null]','$first_name','$last_name','$gmail','$gender')";
       
        $result = mysqli_query($conn, $sql,);

        if($result){
            header("Location:index.php?msg=New user was added successfully");
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
    <link rel="stylesheet" href="" type="text/css">
    <title>Sample for CRUD</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573"> Complete Crud App
    </nav>

    <div class="container">
        <div class="test-center mb-4">
            <h3>Add New User</h3>
            <p class="text-muted"> Please complete the details</p>
        </div>

        <div class="condaiter d-flex justify-contex-center">
            <form action="" method="POST" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col">
                    
                    <label for="" class="form-label"></label>
                        <input type="text" class="form-control" name="first_name" placeholder="Jerome">

                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control" name="last_name" placeholder="Alejandro">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    </div>
                        &nbsp;
                    <div class="form-group - mb-m3">
                        <label for="">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male">&nbsp;
                        <label for="" class="form-input-label"> Male</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female">
                        <label for="" class="form-input-label"> Female</label>
                    </div>

                    <div>
                        <button class="btn btn-success" name="submit"> Save</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>