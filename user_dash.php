<?php

include('Connection.php');
session_start();

$id = $_SESSION['user_id'];
$sql = "SELECT* from users WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$profile = $row['image'];
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
            <!-- <div id="right_nav_link">
                <a class="nav_link" href="index.php" style="color: #399918;">Home</a>
                <a class="nav_link" href="about_us.php">About Us</a>
                <a class="nav_link" href="our_services.php">Our Services</a>
                <a class="nav_link" href="plans.php">Plans & Donate</a>
                <a class="nav_link" href="plans.php">Dashboard</a>
            </div> -->
            <div id="right_nav_btn">
                <a class="btn btn-success login" href="logout.php" role="button">Log out</a>
                <!-- <a class="btn btn-success contact_btn" href="contact_us.php" role="button">Contact Us</a> -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="user_dash.php" style="color: #399918; font-weight:bold">Dashboard</a></li>
                <li><a href="user_profile_edit.php">Edit Profile</a></li>
                <li><a href="user_profile_delete.php">Delete Membership</a></li>
                <li><a href="user_review.php">Review</a></li>
            </ul>
        </div>
        <div class="profile-edit">
            <h2>User profile</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="profile-pic">
                    <?php echo '<img src="profile/' . $profile . '" alt="Profile Picture">' ?><br>
                </div>
                <br>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="<?php echo $row['name'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="name">age</label>
                    <input type="text" id="name" name="name" placeholder="<?php echo $row['age'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="<?php echo $row['email'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="health">Health Description</label>
                    <input type="text" id="health" name="health" placeholder="<?php echo $row['health_record'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="name">Guardian Name</label>
                    <input type="text" id="name" name="name" placeholder="<?php echo $row['g_name'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="<?php echo $row['address'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" id="contact" name="contact" placeholder="<?php echo $row['number'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="email">Hobby</label>
                    <input type="email" id="email" name="email" placeholder="<?php echo $row['hobby'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="address">Breakfast</label>
                    <input type="text" id="address" name="address" placeholder="<?php echo $row['breakfast'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="contact">Lunch</label>
                    <input type="text" id="contact" name="contact" placeholder="<?php echo $row['lunch'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="health">Dinner</label>
                    <input type="text" id="health" name="health" placeholder="<?php echo $row['dinner'] ?>" readonly class="input_field">
                </div>
                <div class="form-group">
                    <label for="name">Plan</label>
                    <input type="text" id="name" name="name" placeholder="<?php echo $row['plan'] ?>" readonly class="input_field">
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