
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="" type="text/css">
    <title>User Dashboard</title>
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
        width: 100%;    
        background-color: #f1f1c1;
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
         
         
    <div id="sidebar-container-div  ">
       <div id=sidebar class="clearfix">
            <div id="image" class="center">
            </div>
            Name:<br>
            position
 
        </div>
       
        <div id="container" class="clearfix">
            <nav class="navbar mb-3" style="background-color: #00ff5573">
                WELCOME TO USERDASHBOARDS
            </nav>
            <table id="t01" style="width:100%">
                    <thead class="table-dark ">
                            
                                <tr>
                                <th scope="col">ID Number</th>
                                <th scope="col">Full name</th>
                                <th scope="col">Username name</th>
                                <th scope="col">Password</th>
                                <th scope="col">User type</th>
                                <th scope="col">Action</th>
                            </tr>
                        <thead>
                        <tbody>
                            
                            <?php
                                        include "db_conn.php";
                                        $sql = "SELECT * FROM users";
                                        $result = mysqli_query($conn,$sql);
                                        while ($row = mysqli_fetch_assoc($result)){
                                            $idNumber = $row['id'];
                                            $fullname = $row['fullname'];
                                            $username = $row['username'];
                                            $password = $row['password'];
                                            $position = $row['usertyp'];
                                    echo'        
                            
                                    <tr>
                                        <th scope="row">'.$idNumber.'</th>
                                        <td>'.$fullname.'</td>
                                        <td>'.$username.'</td>
                                        <td>'.$password.'</td>
                                        <td>'.$position.'</td>
                                        <td>
                                            <a href="edit_user.php">EDIT</a>
                                            
                                            <a href="delete_user.php">DELETE</a>
                                        </td> 
                                    </tr>
                                    </th>';
                                    ?>

                                    <?php 
                                }
                            ?>
                            
                        </tbody>
                    
                </table>
        </div>
    </div>
</body>
</html>