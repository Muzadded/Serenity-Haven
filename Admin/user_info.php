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
    <div class="sidebar">
        <ul class="nav-links">
            <li><a href="user_info.php" style="font-weight: bold;">Dashboard</a></li>
            <li><a href="donation_list.php">Donation</a></li>
            <li><a href="#">Message</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="client_rqst.php">New Member Request</a></li>
            <a class="btn btn-success login" href="../login.php" role="button">Log out</a>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <h2>User Details</h2>
            <div class="search-box">
                <input type="text" placeholder="Search">
            </div>
            <div class="profile-pic">
                <img src="../assets/logo.jpg" alt="Profile Picture">
            </div>
            
        </div>

        <table class="client-request-table">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Guardian Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Plan</th>
                    <th>Join Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>rifat</td>
                    <td>86</td>
                    <td>Hamid Khan</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Weekly</td>
                    <td>27-03-23</td>
                    <td><a href="#" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>rifat</td>
                    <td>86</td>
                    <td>Hamid Khan</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Weekly</td>
                    <td>27-03-23</td>
                    <td><a href="#" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>rifat</td>
                    <td>86</td>
                    <td>Hamid Khan</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Weekly</td>
                    <td>27-03-23</td>
                    <td><a href="#" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>rifat</td>
                    <td>86</td>
                    <td>Hamid Khan</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Weekly</td>
                    <td>27-03-23</td>
                    <td><a href="#" class="delete">Delete</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>rifat</td>
                    <td>86</td>
                    <td>Hamid Khan</td>
                    <td>rifat@mail.com</td>
                    <td>012345678</td>
                    <td>Weekly</td>
                    <td>27-03-23</td>
                    <td><a href="#" class="delete">Delete</a></td>
                </tr>
            </tbody>
        </table>

        <div class="load-more">
            <button>Load more</button>
        </div>
    </div>

</body>

</html>