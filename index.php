<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/homepage.css?v=<?php echo time(); ?>">
    <title>Home Page</title>
</head>

<body>
    <div id="nav">
        <div id="left_nav">
            <img src="assets/logo.jpg" style="width: 50px; height: 50px;" alt=""><span style="margin-left:10px ;font-size: 20px; font-weight: bold; color: #399918;">Serenity Haven</span>
        </div>
        <div id="right_nav">
            <div id="right_nav_link">
                <a class="nav_link" href="index.php" style="color: #399918;">Home</a>
                <a class="nav_link" href="about_us.php">About Us</a>
                <a class="nav_link" href="our_services.php">Our Services</a>
                <a class="nav_link" href="plans.php">Plans & Donate</a>
            </div>
            <div id="right_nav_btn">
                <a class="btn btn-success login" href="login.php" role="button">Log In</a>
                <a class="btn btn-success contact_btn" href="contact_us.php" role="button">Contact Us</a>
            </div>
        </div>
    </div>
    <div id="wallpaper_div">
        <img src="assets/senior+women+at+an+assisted+living+facility.jpg" alt="">
        <p>Show Love, Support & <br>Comfort the Older</p>
    </div>
    <div id="about_us">
        <div id="abt_left">
            <div id="abt_img">
                <img src="assets/0_2t9fAdJprMijM33W.jpg" alt="">
            </div>
            <div id="abt_img_border">

            </div>
        </div>
        <div id="abt_right">
            <div id="abt_right_content">
                <p style="font-size: 30px; font-weight: 500;">About Us</p>
                <p style="opacity: 0.8;">At the Serenity Haven, We prioritize the well-being and dignity of every individual through our holistic elder care approach. </p>

                <table style="margin-top:10px ;">
                    <tr>
                        <td><img class="cheakbox_icon" src="assets/cheakbox_icon.png" alt=""><span style="opacity: 0.8;">Comprehensive Cave</span></td>
                    </tr>
                    <tr>
                        <td><img class="cheakbox_icon" src="assets/cheakbox_icon.png" alt=""><span style="opacity: 0.8;">Comprehensive Cave</span></td>
                    </tr>
                    <tr>
                        <td><img class="cheakbox_icon" src="assets/cheakbox_icon.png" alt=""><span style="opacity: 0.8;">Comprehensive Cave</span></td>
                    </tr>
                </table>
                <p style="margin-top: 20px; opacity: 0.8;">To learn more about us click the button below</p>
                <a class="btn btn-success" href="about_us.php" role="button">Learn More</a>
            </div>

        </div>

    </div>
    <h3 align="center">Our Services</h3>
    <div id="service">
        <div class="services_div">
            <img src="assets/env.jpg" class="service_icon" alt="">
            <p class="service_title" style="font-weight: 500;">Environment</p>
            <p class="service_det" style="opacity: 0.8; font-size: 15px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit inventore atque ullam, tempore voluptate illo, consectetur placeat optio officiis quasi doloremque ipsum reprehenderit suscipit corrupti id assumenda, nobis numquam pariatur?</p>
        </div>
        <div class="services_div">
            <img src="assets/meal.jpg" class="service_icon" alt="">
            <p class="service_title" style="font-weight: 500;">Nutritious Meals</p>
            <p class="service_det" style="opacity: 0.8; font-size: 15px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit inventore atque ullam, tempore voluptate illo, consectetur placeat optio officiis quasi doloremque ipsum reprehenderit suscipit corrupti id assumenda, nobis numquam pariatur?</p>
        </div>
        <div class="services_div">
            <img src="assets/medical.jpg" class="service_icon" alt="">
            <p class="service_title" style="font-weight: 500;">Doctor Services</p>
            <p class="service_det" style="opacity: 0.8; font-size: 15px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit inventore atque ullam, tempore voluptate illo, consectetur placeat optio officiis quasi doloremque ipsum reprehenderit suscipit corrupti id assumenda, nobis numquam pariatur?</p>
        </div>
        <div class="services_div">
            <img src="assets/trainer.jpg" class="service_icon" alt="">
            <p class="service_title" style="font-weight: 500;">Skilled Exercise Trainer</p>
            <p class="service_det" style="opacity: 0.8; font-size: 15px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit inventore atque ullam, tempore voluptate illo, consectetur placeat optio officiis quasi doloremque ipsum reprehenderit suscipit corrupti id assumenda, nobis numquam pariatur?</p>
        </div>
    </div>

    <!-- <div id="review">
        <h3 align="center" style="padding-top: 30px;">Client Reviews</h3>
        <p style="margin: 0; opacity: 0.8;">?></p>
        <img src="assets/profile_icon.png" alt="" id="profile_icon">
        <p align="center" style="margin-bottom:0;font-weight: 500;">Rifat Hasan</p>
        <p align="center" style="margin-top:0 ;font-size: 13px; opacity: 0.8;">ABC Software</p>

    </div> -->

    <div id="learn_more">
        <div id="learn_more_left">
            <p style="font-size: 45px; font-weight: 500;">The Best Old Age Care Center For You</p>
            <p style="font-size: 20px; opacity: 0.8;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dolor nulla voluptatibus nihil animi provident nostrum tenetur exercitationem consequatur quaerat corporis fugiat aperiam blanditiis, rerum error. Ipsum itaque magni veritatis!</p>
        </div>

        <div id="learn_more_right">
            <img id="learn_more_img" src="assets/learn_more.jpeg" alt="">
        </div>

        <div>

            <p>.</p>

        </div>
    </div>

    <div id="contact_div">
        <p style="font-size: 30px; color: white; font-weight: bold;padding-top:30px ; padding-left: 30px;">Looking for a Better Care?</p>
        <p style="padding-left: 30px; opacity: 0.8;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet exercitationem aliquam debitis laborum mollitia optio dolorum culpa quae sunt quisquam nemo eos sint corrupti quasi, excepturi voluptas veritatis neque nulla.</p>
        <a class="btn btn-light" href="contact_us.php" role="button" style="margin-left:40px">Contact Us</a>
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