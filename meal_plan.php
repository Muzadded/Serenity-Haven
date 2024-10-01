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
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    <div id="our_plan">
        <div class="plan_card">
            <p align="center" style="font-weight:800;font-size:30px">Meal Plan 1</p>
            <p align="center" style="font-size:15px; font-weight:500;opacity:0.8">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a class="btn join_btn" href="#" role="button">Select</a>
        </div>
        <div class="plan_card">
            <p align="center" style="font-weight:800;font-size:30px">Meal Plan 2</p>
            <p align="center" style="font-size:15px; font-weight:500;opacity:0.8">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a class="btn join_btn" href="#" role="button">Select</a>
        </div>
        <div class="plan_card">
            <p align="center" style="font-weight:800;font-size:30px">Meal Plan 3</p>
            <p align="center" style="font-size:15px; font-weight:500;opacity:0.8">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a class="btn join_btn" href="#" role="button">Select</a>
        </div>

    </div>
    <form action="" method="POST">
        <label for="message" style="font-weight:bold; font-size:30px; color: #1A3636">Any Instruction about your meal</label><br>
        <textarea name="message" id="message" rows="10" cols="50" placeholder="Write here..."></textarea><br><br>
        <input type="submit" class="btn btn-success" style="background-color: #329954" value="Confirm Registration">
    </form>
    
</body>

</html>