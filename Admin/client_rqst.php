<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user_infos.css">
    <title>Document</title>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav-links">
            <li><a href="user_info.php">Dashboard</a></li>
            <li><a href="donation_list.php">Donation</a></li>
            <li><a href="#">Message</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="client_rqst.php" style="font-weight: bold;">New Member Request</a></li>
            <a class="btn btn-success login" href="../login.php" role="button">Log out</a>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h2>New Client Request</h2>
            <div class="search-box">
                <input type="text" placeholder="Search">
            </div>
            <div class="profile-pic">
                <img src="../assets/logo.jpg" alt="Profile Picture">
            </div>
        </div>

        <!-- Client Request Table -->
        <table class="client-request-table">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Plan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>rifat</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Weekly</td>
                    <td><a href="#" class="accept">Accept</a> <a href="#" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>rifat</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Yearly</td>
                    <td><a href="#" class="accept">Accept</a> <a href="#" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>rifat</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Yearly</td>
                    <td><a href="#" class="accept">Accept</a> <a href="#" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>rifat</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Weekly</td>
                    <td><a href="#" class="accept">Accept</a> <a href="#" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>rifat</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Monthly</td>
                    <td><a href="#" class="accept">Accept</a> <a href="#" class="delete">Delete</a></td>
                </tr>
            </tbody>
        </table>

        <div class="load-more">
            <button>Load more</button>
        </div>
    </div>

</body>

</html>