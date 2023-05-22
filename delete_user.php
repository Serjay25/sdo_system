<?php
    include "db_conn.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM 'users' WHERE 'id' = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: userdashboard.php");
    }
    else{
        echo "Failed to delete" . mysqli_error($conn);
    }

?>







