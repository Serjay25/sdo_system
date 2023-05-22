<?php
    include "db_conn.php";
     if(isset($_POST['submit'])){
    
        $item_name = $_POST['item'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $date = date('Y-m-d', strtotime($_POST['dop']));

        $sql= "INSERT INTO `items`(`item_name`, `price`, `quantity`, `date`) VALUES ('$item_name','$price','$quantity','$date')";
       
        $query_run = mysqli_query($conn, $sql,);

        if($query_run){
            header("Location:add_items.php?msg=New user was added successfully");
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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="" type="text/css">
    <title>Add item form</title>
   <style>
    
    *{
    font-family: arial;
    padding:0px;
    margin:0px;
    box-sizing:border-box;
   }

   #header-div{
    width: 90%;
    margin:auto;
    height:10vh;
   }
   #logo-nav-div{
       width: 100%;
       min-height: 50px;
       background-color: #F6F6F6;
       
   } 
   #logo-div {
        width: 30%;
        height: 80px;
        float:left;
        padding-left:1%;
        line-height:80px;
   }
   #nav-div{
    height: 80px;
    float: right;
    padding-left: 1%;
    display: flex;
    justify-content: space-between;
    align-items: center;
   }
    ul {
    display: flex;
    list-style-type: none;  
    }
    ul li {
    margin-right: 50px;
    }
   .clearfix::after;
   {
    content: "";
    display: block;
    clear:both;
   }
   #sidebar{
    width: 14%;
    height: 80vh;
    background-color: #F6F6F6;
    float:left;
    margin-top:10px;
    margin-left:-27%;
   }
   #container{
    width: 75%;
    height: 80vh;
    min-height:100px;
    background-color: #D9D9D9;
    margin-top:6px;
    margin-right
    :5%;
    padding-left:10px;
    float:right;
    }
   .box{
    width: 30%;
    height: 30%;
    background-color: gray;
    float:left;
    margin-left:15%;
    margin-top: 15%;
    text-align:center;
   }
   #image{
    width: 100px;
    height: 100px;
    background-color:white;
    
    }

</style>
</head>

<body>
<div id="header-div">
    
    <div id="logo-nav-div" class="clearfix">
    
        <div id="logo-div">
   <img src="SDO logo.png" alt="lOGO" style="width: 140px;px; height:80px;">
   
                    </div>
        <div id="nav-div">
            <ul>
        <li><a href="userdashboard.php">User</a></li>
        <li><a href="itemsdashboard.php">Items</a></li>
        <li><a href="logout.php">Log out</a></li>
        </ul>
            </div>
    </div>

</div>
   
     <div class="main-container">
    <div id="sidebar-container-div  ">
       <div id=sidebar class="clearfix">
            <div id="image" class="center">
            </div>
            Name:<br>
            position

        </div>
       
        <div id="container" class="clearfix">
                <div class="row justify-contex-center">
                <div class="col-md-8">
                    
                    <div class="form mt-5">
                        <div class="form-header">
                            <h3>Insert data</h3>
                        </div>
                        <div class="form-body">
                            <form  method="POST" class="justify-contex-center"
                            action="add_items.php">
                                
                                <div class="form-group">
                                    <label for="">Item name</label>
                                    <input type="text" name="item" class="form-control mb-3" placeholder="Enter item" require="">
                                </div>

                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control mb-3" placeholder="Enter price" require="">
                                </div>

                                <div class="form-group">
                                    <label for="">Quality</label>
                                    <input type="text" name="quantity" class="form-control mb-3" placeholder="Enter Pieces" require="">
                                </div>

                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input type="date" name="dop" class="form-control mb-3" placeholder="Enter date" require="">
                                </div>

                                <div class="submit_btn">
                                    <input id="add_btn" href="" class="btn btn-dark" name="submit" type="submit"></input>
                                    
                                    </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </div>
    </div>
</body>
</html>