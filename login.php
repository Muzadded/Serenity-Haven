<?php

session_start();
include('Connection.php');

if (isset($_POST['submit'])) {
    $login_email = $_POST['email'];
    $login_pass = $_POST['password'];

    $login_info = mysqli_query($conn, "SELECT* FROM users WHERE email = '$login_email'");

    if (mysqli_num_rows($login_info) > 0) {

        $row = mysqli_fetch_assoc($login_info);

        if ($row['pass'] == $login_pass) {
            if($row['status'] == 'active'){
                $_SESSION['email'] = $login_email;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['uname'] = $row['name'];
                $_SESSION['age'] = $row['age'];
                $_SESSION['address'] = $row['address'];
                header('Location: user_dash.php');
            }
            elseif($row['status'] == 'pending'){
                $status_msg = "Your New Account Request is in Pending";
            }
            elseif($row['status'] == 'blocked'){
                $status_msg = "Your Account is Blocked. Please Contact with Admin";
            }
        } else {
            $pass_match = 'Password Incorrect';
        }
    } else {
        $email_match = 'User not found';
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\logins.css?v=<?php echo time(); ?>">
    <title>Document</title>
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
        <div class="login-box">
            <div class="form-section">
                <h2>Welcome to</h2>
                <h1>Old Age Care Center</h1>
                <p>Login to your account</p>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="riya@gmail.com" required value="<?php if (isset($email)) {
                                                                                                                    echo $email;
                                                                                                                } ?>">

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" required value="<?php if (isset($password)) {
                                                                                                                    echo $password;
                                                                                                                } ?>">

                    <div class="remember-forgot">
                        <label><input type="checkbox" name="remember" checked> Remember me</label>
                        <a href="#">Forgot password?</a>
                    </div>

                    <button type="submit" class="login-btn" name="submit" value="submit">Login</button>
                    <div>
                        <span style="color:red">
                            <?php
                            if (isset($email_match)) {
                                echo $email_match;
                            } elseif (isset($pass_match)) {
                                echo $pass_match;
                            }
                            elseif (isset($status_msg)) {
                                echo $status_msg;
                            }
                            ?>
                        </span>
                    </div>
                </form>

                <p class="sign-up">Don't have an account? <a href="register.php">Sign in</a></p>
            </div>

            <div class="image-section">
                <img src="assets/logins_cover.jpg" alt="Old Age Care Center">
            </div>
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