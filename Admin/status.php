<?php

include('../Connection.php');
session_start();

if (isset($_GET['id']) && isset($_GET['status'])) {
    $status = $_GET['status'];
    $user_id = $_GET['id'];
    if($status == 'delete'){
        $delete = mysqli_query($conn, "DELETE FROM users WHERE id = $user_id");
        header('Location: user_info.php');
    }else{
        $update = mysqli_query($conn, "UPDATE users SET status= '$status' WHERE id = $user_id");
        header('Location: user_info.php');
    }
}
if(isset($_GET['page']) && isset($_GET['id'])){
    $user_id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM contact_msg WHERE id = $user_id");
    header('Location: contact_msg.php');
}
