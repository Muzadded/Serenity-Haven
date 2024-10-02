<?php

session_start();
include('Connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];
    $gname = $_SESSION['g_name'];
    $grelation = $_SESSION['g_relation'];
    $age = $_SESSION['age'];
    $number = $_SESSION['number'];
    $address = $_SESSION['address'];
    $healthRecord = $_SESSION['health_record'];
    $hobby = $_SESSION['hobby'];
    $plan = $_SESSION['plan'];
    $image = $_SESSION['image_name'];
    // $_SESSION['breakfast_meal'] = $_POST['breakfast_meal'];
    // $_SESSION['lunch_meal'] = $_POST['lunch_meal'];
    // $_SESSION['dinner_meal'] = $_POST['dinner_meal'];
    // $_SESSION['meal_message'] = $_POST['meal_message'];

    $b_meal = $_POST['breakfast_meal'];
    $l_meal = $_POST['lunch_meal'];
    $d_meal =  $_POST['dinner_meal'];
    $meal_msg =  $_POST['meal_message'];


    $insert = "INSERT INTO users (name,email,pass,g_name,g_relation,age,number,address,health_record,hobby,plan,breakfast,lunch,dinner,message,image,payment) VALUES
                ('$name','$email','$pass','$gname','$$grelation','$age','$number','$address','$healthRecord','$hobby','$plan','$b_meal','$$l_meal','$$d_meal','$meal_msg','$image','Done')";

    if (mysqli_query($conn, $insert)) {

        header('Location: login.php');
    } else {
        echo 'Query Error: ' . mysqli_query($conn, $insert);
    }

    $image_error = $_FILES['user_prof']['error'];

    if ($image_error === UPLOAD_ERR_OK) {
        if (move_uploaded_file($_SESSION['image_tmp_name'], $_SESSION['folder'])) {
            header('Location: login.php');
        } else {
            echo "Image Upload failed during move.";
        }
    } else {
        echo "Error uploading image: ";
        switch ($image_error) {
            case UPLOAD_ERR_INI_SIZE:
                echo "The uploaded file exceeds the upload_max_filesize directive in php.ini.";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                echo "The uploaded file exceeds the MAX_FILE_SIZE directive specified in the HTML form.";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "The uploaded file was only partially uploaded.";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "No file was uploaded.";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo "Missing a temporary folder.";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo "Failed to write file to disk.";
                break;
            case UPLOAD_ERR_EXTENSION:
                echo "File upload stopped by a PHP extension.";
                break;
            default:
                echo "Unknown error.";
                break;
        }
    }
}
