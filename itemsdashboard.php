
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="" type="text/css">
    <title>Item Dashboard</title>
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
    margin-right:5%;
    background-color: #F6F6F6;
    justify-content: center;
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

    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
    table#t01 {
        width: 90%;    
        background-color: #f1f1c1;
        margin-top:10px;
        margin-left:5%
        
    }
    #add_btn{
        float:right;
        margin-top:5px;
        margin-right:5px;
        margin-bottom:5px;
    }

    .topnav a {
  float: left;
  display: block;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
    }
    .topnav input[type=text] {
  float: left;
  padding: 6px;
  margin-top: 5px;
  margin-left: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
}
  
    .topnav input[type=text] {
      border: 1px solid #ccc;  
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
        <li><a href="maindashboard.php">Welcome</a></li>
        <li><a href="logout.php">Log out</a></li>
        </ul>
            </div>
    </div>

</div>
    <?php
        if(isset($_SESSION['username'])) {?>
         
         <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Welcome</h1>
                <p class="lead text-muted">
                    Something short and leading about the collection below-its content. 
                
                
                </h1>
                </p>
                <a href="" class="btn btn-primary my-2">
                        More menu
                    </a>
                    <a href="logout.php" class="btn btn-secondary  my-2">
                        Log out
                    </a>
                </h1>
                
            </div>
         </section>
         <?php
        }
        
    ?>
       <div class="main-container">
    <div id="sidebar-container-div  ">
       <div id=sidebar class="clearfix">
            <div id="image" class="center">
            </div>
            <?php
            
            Name: <td>'.$fullname.'</td><br>
            position
            ?>

        </div>
       
        <div id="container" class="">
            <form method="post">
            
            <div class="topnav">
            <a id="add_btn" href="add_items.php" class="btn btn-dark">Add new item</a>
            <input type="text" placeholder="Search...">
            
            </div> 
            <table id="t01" style="width:90%">
                    <thead class="table-dark ">
                            
                                <tr>
                                <th scope="col">Item ID</th>
                                <th scope="col">Item name</th>
                                <th scope="col">Price</th> 
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        <thead>
                        <tbody>
                            
                            <?php
                                        include "db_conn.php";
                                        $sql = "SELECT * FROM items";
                                        $result = mysqli_query($conn,$sql);
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $items_id = $row['item_id'];
                                            $item_name = $row['item_name'];
                                            $price = $row['price'];
                                            $date = $row['date'];
                                    echo'        
                            
                                    <tr>
                                        <th scope="row">'.$items_id.'</th>
                                        <td>'.$item_name.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$date.'</td>
                                        <td>
                                            <a href="edit.php">EDIT</a>
                                            
                                            <a href="delete.php">DELETE</a>
                                        </td> 
                                    </tr>
                                    </th>';
                                    ?>

                                    <?php 
                                }
                            ?>
                            
                        </tbody>
                    
                </table>
            <form>
        </div>
    </div>
</body>
</html> 