<?php

session_start();

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/plans.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>


<style>
    /* CSS to center the form */
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        border-radius: 8px;
    }

    textarea {
        width: 100%;
        max-width: 400px;
        min-height: 150px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
        font-size: 16px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <p align="center" style="margin-top:100px; font-weight:bold; font-size:50px; color: #1A3636">Choose Your Meal</p>
    <form action="reg_process.php" method="POST">
        <label for="" style="font-weight:bold">Breakfast</label>
        <select name="breakfast_meal" id="">
            <option value="" disabled selected>Choose your Breakfast</option>
            <option value="meal1">Meal plan 1</option>
            <option value="meal2">Meal plan 1</option>
            <option value="meal3">Meal plan 1</option>
        </select>
        <label for="" style="font-weight:bold">Lunch</label>
        <select name="lunch_meal" id="">
        <option value="" disabled selected>Choose your Lunch</option>
            <option value="meal1">Meal plan 1</option>
            <option value="meal2">Meal plan 1</option>
            <option value="meal3">Meal plan 1</option>
        </select>
        <label for="" style="font-weight:bold">Dinner</label>
        <select name="dinner_meal" id="">
        <option value="" disabled selected>Choose your Dinner</option>
            <option value="meal1">Meal plan 1</option>
            <option value="meal2">Meal plan 1</option>
            <option value="meal3">Meal plan 1</option>
        </select>
        <label for="message" style="font-weight:bold; font-size:30px; color: #1A3636; margin-top:100px">Any Instruction about your meal</label><br>
        <textarea name="meal_message" id="message" rows="5" cols="50" placeholder="Write here..."></textarea><br><br>
        <input type="submit" class="btn btn-success" style="background-color: #329954" value="Confirm Registration">
    </form>

</body>

</html>