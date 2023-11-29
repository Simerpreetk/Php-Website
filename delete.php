<?php
    include "./inc/database.php";
    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        $sql = "DELETE from phpadmins where user_id=$user_id";
        $conn->query($sql);
    }
    header('location:details.php');
    exit;
?>
