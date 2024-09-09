<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration Page</title>

    <link rel="stylesheet" href="css/register.css">
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
                <a class="btn btn-success login" href="register.php" role="button">Register</a>
                <a class="btn btn-success contact_btn" href="#" role="button">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="registration-box">
            <h2>Registration</h2>
            <form action="#">
                <div class="form-group">
                    <div class="left-column">
                        <input type="text" placeholder="Name" required>
                        <input type="email" placeholder="Email" required>
                        <input type="password" placeholder="Password" required>
                        <input type="text" placeholder="Guardian Name" required>
                        <input type="text" placeholder="Relation" required>
                        <input type="number" placeholder="Age" required>
                    </div>
                    <div class="right-column">
                        <input type="tel" placeholder="Contact Number" required>
                        <input type="text" placeholder="Address" required>
                        <input type="text" placeholder="Previous Health Records" required>
                        <input type="file" placeholder="Upload a Picture">
                        <input type="text" placeholder="Hobby">
                        <select>
                            <option value="" disabled selected>Select your option</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>

                </div>
                <div class="submit-section">
                    <button type="submit" class="register-btn">Register</button>
                    <p>Already have an account? <a href="#">Log in</a></p>
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