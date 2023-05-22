 <?php
    include "db_conn.php";
     if(isset($_POST['save'])){
        $item = $_POST['item'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $date = date('Y-m-d', strotime($_POST['date']));

        $query= "INSERT INTO `items`(`item_id`, `item_name`, `price`, `quantity`, `date`) VALUES (NULL,'$item','$price','$quantity','$date')";
        $query_run = mysqli_query($conn, $query,);

        if ($query_run) {
            header("Location:index.php?msg=New user was added successfully");
        }
            else {
                echo "Failed: " . mysqli_error($conn);
    } 
}
?>