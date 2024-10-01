<?php

session_start();
include('Connection.php');
if (isset($_POST['submit'])) {

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['g_name'] = $_POST['g_name'];
    $_SESSION['g_relation'] = $_POST['g_relation'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['number'] = $_POST['number'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['health_record'] = $_POST['health_record'];
    $_SESSION['hobby'] = $_POST['hobby'];
    $_SESSION['plan'] = $_POST['plan'];

    $image_name = $_FILES['user_prof']['name'];
    $image_tmp_name = $_FILES['user_prof']['tmp_name'];
    $image_data = file_get_contents($image_tmp_name);

    $_SESSION['image_name'] = $image_name;

    $email = $_SESSION['email'];
    $check_email = mysqli_query($conn, "SELECT *FROM users where email = '$email' ");
    $email_count = mysqli_num_rows($check_email);

    if ($email_count != 0) {
        $email_match = 'Email Already Exist';
    }else{
        header('Location: meal_plan.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration Page</title>

    <link rel="stylesheet" href="css/register.css?v=<?php echo time(); ?>">
</head>

<body>
    <div id="nav">
        <div id="left_nav">
            <img src="assets/logo.jpg" style="width: 50px; height: 50px;" alt=""><span style="margin-left:10px ;font-size: 20px; font-weight: bold; color: #399918;">Serenity Haven</span>
        </div>
        <div id="right_nav">
            <div id="right_nav_link">
                <a class="nav_link" href="index.php">Home</a>
                <a class="nav_link" href="about_us.php">About Us</a>
                <a class="nav_link" href="our_services.php">Our Services</a>
                <a class="nav_link" href="plans.php">Plans & Donate</a>
            </div>
            <div id="right_nav_btn">
                <a class="btn btn-success login" href="register.php" role="button">Register</a>
                <a class="btn btn-success contact_btn" href="contact_us.php" role="button">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="registration-box">
            <h2>Registration</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="left-column">
                        <input type="text" placeholder="Name" required name="name">
                        <input type="email" placeholder="Email" required name="email">
                        <span>
                            <?php
                                if(isset($email_match)){
                                    echo $email_match;
                                }
                            ?>
                        </span>
                        <input type="password" placeholder="Password" required name="pass">
                        <input type="text" placeholder="Guardian Name" required name="g_name">
                        <input type="text" placeholder="Relation" required name="g_relation">
                        <input type="number" placeholder="Age" required name="age">
                    </div>
                    <div class="right-column">
                        <input type="tel" placeholder="Contact Number" required name="number">
                        <input type="text" placeholder="Address" required name="address">
                        <input type="text" placeholder="Previous Health Records" required name="health_record">
                        <input type="file" placeholder="Upload a Picture" name="user_prof">
                        <input type="text" placeholder="Hobby" name="hobby">
                        <select name="plan">
                            <option value="" disabled selected>Choose your plan</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>

                </div>
                <div class="submit-section">
                    <button type="submit" class="register-btn" name="submit">Register</button>
                    <p>Already have an account? <a href="login.php">Log in</a></p>
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