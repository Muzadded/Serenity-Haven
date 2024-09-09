<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\logins.css">
    <title>Document</title>
</head>

<body>
    <div id="nav">
        <div id="left_nav">
            <img src="assets/logo.jpg" style="width: 50px; height: 50px;" alt=""><span style="margin-left:10px ;font-size: 20px; font-weight: bold; color: #399918;">Serenity Haven</span>
        </div>
        <div id="right_nav">
            <div id="right_nav_link">
                <a class="nav_link" href="index.html" style="color: #399918;">Home</a>
                <a class="nav_link" href="about_us.html">About Us</a>
                <a class="nav_link" href="our_services.html">Our Services</a>
                <a class="nav_link" href="plans.php">Plans & Donate</a>
            </div>
            <div id="right_nav_btn">
                <a class="btn btn-success login" href="login.php" role="button">Register</a>
                <a class="btn btn-success contact_btn" href="#" role="button">Contact Us</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="login-box">
            <div class="form-section">
                <h2>Welcome to</h2>
                <h1>Old Age Care Center</h1>
                <p>Login to your account</p>

                <form action="#">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="riya@gmail.com" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" required>

                    <div class="remember-forgot">
                        <label><input type="checkbox" name="remember" checked> Remember me</label>
                        <a href="#">Forgot password?</a>
                    </div>

                    <button type="submit" class="login-btn">Login</button>
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