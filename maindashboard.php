
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="" type="text/css">
    <title>Dashboard</title>
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
    line-height:170px;
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
    <?php
        if(isset($_SESSION['username'])) {?>
         
         <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Welcome, <?php echo ['username'];?></h1>
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
     
    <div id="sidebar-container-div  ">
       <div id=sidebar class="clearfix">
            <div id="image" class="center">
            </div>
            Name:<br>
            position

        </div>
       
        <div id="container" class="clearfix">
       
            <div class="box "  >
            <img src="user.png" alt="lOGO" style="width: 200px;px; height:100px;"><br>
                <A href="userdashboard.php">USER DASHBOARD</A>
           </div>

            <div class="box" >
            <img src="server.png" alt="lOGO" style="width: 200px;px; height:100px;"><br>
                <A href="itemsdashoard.php">ITEMS DASHBOARD</A>
            </div>
        </div>
    </div>
</body>
</html>