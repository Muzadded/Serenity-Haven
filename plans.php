<?php

include("Connection.php");
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];

    $insert = "INSERT INTO donation (name,email,phone,amount) VALUES ('$name','$email','$phone','$amount')";

    if (mysqli_query($conn, $insert)) {
        $msg1 = "Your Donation is Successful";
        $msg2 = "Thanks for Donating in Serenity Haven";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/plans.css?v=<?php echo time(); ?>">
    <title>Our Services</title>
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
                <a class="nav_link" href="plans.php" style="color: #399918;">Plans & Donate</a>
            </div>
            <div id="right_nav_btn">
                <a class="btn btn-success login" href="login.php" role="button">Log In</a>
                <a class="btn btn-success contact_btn" href="contact_us.php" role="button">Contact Us</a>
            </div>
        </div>
    </div>
    <div id="wallpaper_div">
        <img src="assets/plans_cover.jpg" alt="">
        <p>Our Services</p>
    </div>
    <p align="center" style="margin-top:100px; font-weight:bold; font-size:50px; color: #1A3636">Our Plans</p>
    <div id="our_plan">
        <div class="plan_card">
            <p align="center" style="font-weight:800;font-size:30px">Weekly Plan</p>
            <p align="center" style="font-size:15px; font-weight:500;opacity:0.8">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p align="center" style="font-weight:800;font-size:30px">3000</p>
            <a class="btn join_btn" href="register.php" role="button">Register</a>
        </div>
        <div class="plan_card">
            <p align="center" style="font-weight:800;font-size:30px">Monthly Plan</p>
            <p align="center" style="font-size:15px; font-weight:500;opacity:0.8">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p align="center" style="font-weight:800;font-size:30px">9000</p>
            <a class="btn join_btn" href="register.php" role="button">Register</a>
        </div>
        <div class="plan_card">
            <p align="center" style="font-weight:800;font-size:30px">Yearly <br> Plan</p>
            <p align="center" style="font-size:15px; font-weight:500;opacity:0.8">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p align="center" style="font-weight:800;font-size:30px">90000</p>
            <a class="btn join_btn" href="register.php" role="button">Register</a>
        </div>

    </div>
    <p align="center" style="font-weight:bold; font-size:30px; color: #1A3636">To book your plan, click the Join Button</p>
    <p align="center" style="margin-top:100px; font-weight:bold; font-size:30px; color: #1A3636">Donate Now!</p>
    <div id="donation">
        <form class="row g-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="col-md-5">
                <label for="inputEmail4" class="form-label" style="font-weight:500">Full Name</label>
                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
            </div>
            <div class="col-md-5" style="margin-left:100px">
                <label for="inputPassword4" class="form-label" style="font-weight:500">Email</label>
                <input type="email" class="form-control" placeholder="example@mail.com" name="email" required>
            </div>
            <div class="col-md-5">
                <label for="inputEmail4" class="form-label" style="font-weight:500">Phone</label>
                <input type="text" class="form-control" placeholder="0123456678" name="phone" required>
            </div>
            <div class="col-md-5" style="margin-left:100px">
                <label for="inputPassword4" class="form-label" style="font-weight:500">Amount</label>
                <input type="text" class="form-control" placeholder="TAKA" name="amount" required>
            </div>
            <div class="col-12" style="margin:35px 0 0 40.8%">
                <button type="submit" class="btn btn-success" style="color:white; width:100px; font-weight:500" name="submit">Donate</button><br>
            </div>
            <div style="">

                <span style="color:#3c763d; font-weight:bold; font-size:20px;">
                    <?php
                    if (isset($msg1)) {
                        echo $msg1;?> <br> <?php
                        echo $msg2;
                    }
                    ?>
                </span>
            </div>
        </form>
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