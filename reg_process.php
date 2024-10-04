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



    if($plan=="weekly"){
        $payment = 3000;
        echo "3000";
    }
    elseif($plan=="monthly"){
        $payment = 9000;
        echo "9000";
    }
    elseif($plan=="yearly"){
        $payment = 90000;
        echo "90000";
    }

    $insert = "INSERT INTO users (name,email,pass,g_name,g_relation,age,number,address,health_record,hobby,plan,breakfast,lunch,dinner,message,image,payment,status) VALUES
                ('$name','$email','$pass','$gname','$grelation','$age','$number','$address','$healthRecord','$hobby','$plan','$b_meal','$l_meal','$d_meal','$meal_msg','$image','$payment','pending')";

    if (mysqli_query($conn, $insert)) {

        header('Location: login.php');
    } else {
        echo 'Query Error: ' . mysqli_query($conn, $insert);
    }

}
