<?php

include('Connection.php');
session_start();

$id = $_SESSION['user_id'];
$sql = "SELECT* from users WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$profile = $row['image'];

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $g_name = $_POST['g_name'];
    // $g_relation = $_POST['g_relation'];
    $age = $_POST['age'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $healthRecord = $_POST['health'];
    $hobby = $_POST['hobby'];
    $plan = $_POST['plan'];
    $breakfast = $_POST['breakfast'];
    $lunch = $_POST['lunch'];
    $dinner = $_POST['dinner'];

    if ($plan == "weekly") {
        $payment = 3000;
        echo "3000";
    } elseif ($plan == "monthly") {
        $payment = 9000;
        echo "9000";
    } elseif ($plan == "yearly") {
        $payment = 90000;
        echo "90000";
    }

    $check_email = mysqli_query($conn, "SELECT *FROM users where email = '$email' AND id != $id");
    $email_count = mysqli_num_rows($check_email);

    if ($email_count != 0) {
        $email_match = 'Email Already Exist';
    } else {
        $update = ("UPDATE users SET
        name = '$name',email = '$email',pass = '$pass',g_name = '$g_name',age = '$age',number = '$number',address = '$address',health_record = '$healthRecord',
        hobby = '$hobby',plan = '$plan',breakfast = '$breakfast',lunch = '$lunch',dinner = '$dinner',payment = '$payment'
        WHERE id = $id");

        if (mysqli_query($conn, $update)) {

            header('Location: user_dash.php');
        } else {
            echo 'Query Error: ' . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user_profile_edits.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <div id="nav">
        <div id="left_nav">
            <img src="assets/logo.jpg" style="width: 50px; height: 50px;" alt=""><span style="margin-left:10px ;font-size: 20px; font-weight: bold; color: #399918;">Serenity Haven</span>
        </div>
        <div id="right_nav">
            <div id="right_nav_btn">
                <a class="btn btn-success login" href="logout.php" role="button">Log out</a>
                <a class="btn btn-success contact_btn" href="contact_us.php" role="button">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="user_dash.php">Dashboard</a></li>
                <li><a href="user_profile_edit.php" style="color: #399918; font-weight:bold">Edit Profile</a></li>
                <li><a href="user_profile_delete.php">Delete Membership</a></li>
                <li><a href="user_review.php">Review</a></li>
            </ul>
        </div>
        <div class="profile-edit">
            <h2>Edit profile</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="profile-pic">
                    <?php echo '<img src="profile/' . $profile . '" alt="Profile Picture">' ?><br>
                </div>
                <br>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>" required class="input_field">
                </div>
                <div class="form-group">
                    <label for="name">age</label>
                    <input type="text" id="name" name="age" value="<?php echo $row['age'] ?>" required class="input_field">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" required class="input_field">
                    <span style="color:red">
                        <?php
                        if (isset($email_match)) {
                            echo $email_match;
                        }
                        ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="health">Health Description</label>
                    <input type="text" id="health" name="health" value="<?php echo $row['health_record'] ?>" required class="input_field">
                </div>
                <div class="form-group">
                    <label for="name">Guardian Name</label>
                    <input type="text" id="name" name="g_name" value="<?php echo $row['g_name'] ?>" required class="input_field">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" value="<?php echo $row['address'] ?>" required class="input_field">
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" id="contact" name="number" value="<?php echo $row['number'] ?>" required class="input_field">
                </div>
                <div class="form-group">
                    <label for="email">Hobby</label>
                    <input type="text" id="email" name="hobby" value="<?php echo $row['hobby'] ?>" required class="input_field">
                </div>
                <div class="form-group">
                    <label for="service-plan">Your Service Plan</label>
                    <select name="breakfast" class="input_field" required>
                        <option value="" disabled selected>Choose your Breakfast</option>
                        <option value="meal1">Meal plan 1</option>
                        <option value="meal2">Meal plan 1</option>
                        <option value="meal3">Meal plan 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="service-plan">Your Service Plan</label>
                    <select name="lunch" class="input_field" required>
                        <option value="" disabled selected>Choose your Lunch</option>
                        <option value="meal1">Meal plan 1</option>
                        <option value="meal2">Meal plan 1</option>
                        <option value="meal3">Meal plan 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="service-plan">Your Service Plan</label>
                    <select name="dinner" class="input_field" required>
                        <option value="" disabled selected>Choose your Dinner</option>
                        <option value="meal1">Meal plan 1</option>
                        <option value="meal2">Meal plan 1</option>
                        <option value="meal3">Meal plan 1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="service-plan">Your Service Plan</label>
                    <select name="plan" class="input_field" required>
                        <option value="" disabled selected>Change your plan</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" id="password" name="pass" value="<?php echo $row['pass'] ?>" required class="input_field">
                </div>
                <div class="button-group">
                    <button type="submit" class="save-btn" name="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

    <div id="footer">
        <div id="footer_left">
            <img style="width: 50px; height: 50px;" src="assets/logo.jpg" alt=""><span style="margin-left:10px ;font-size: 20px; font-weight: bold; color: #399918;">Serenity Care Center</span>
            <p style="opacity: 0.8;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium accusantium vel autem ab quos quis iure quisquam aperiam. Sapiente accusantium neque amet, natus ratione sint facere nam sunt quam similique.</p>
            <table>
                <tr>
                    <td><img style="width: 20px; height: 20px;" src="assets/facebook-round-black-icon4588.logowik.com.webp" alt=""></td>
                    <td><img style="width: 20px; height: 20px;" src="assets/insta.png" alt=""></td>
                    <td><img style="width: 20px; height: 20px;" src="assets/twitt.png" alt=""></td>
                    <td><img style="width: 20px; height: 20px;" src="assets/ln.png" alt=""></td>
                </tr>
            </table>
        </div>
        <div id="footer_right">
            <table>
                <tr>
                    <td>Quick Link</td>
                    <td>Legal</td>
                </tr>
                <tr>
                    <td>Home</td>
                    <td>Terms of Service</td>
                </tr>
                <tr>
                    <td>About</td>
                    <td>Privacy Policy</td>
                </tr>
                <tr>
                    <td>Portfolio</td>
                </tr>
                <tr>
                    <td>Services</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>