<?php

include("../Connection.php");
session_start();

$user_data = mysqli_query($conn, "SELECT* FROM users WHERE status != 'pending'");
$i = 0;

?>


<html>

<head>
    <!-- jQuery -->
    <script type="text/javascript"
        src="https://code.jquery.com/jquery-3.5.1.js">
    </script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user_infos.css?v=<?php echo time(); ?>">
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>
</head>

<body>
    <div class="sidebar">
        <ul class="nav-links">
            <li><a href="user_info.php">Dashboard</a></li>
            <li><a href="daily_meal.php">Daily Meal</a></li>
            <li><a href="user_msg.php">Message</a></li>
            <li><a href="client_rqst.php" style="font-weight: bold;">New Member Request</a></li>
            <li><a href="donation_list.php">Donation</a></li>
            <a class="btn btn-success login" href="admin_login.php" role="button">Log out</a>
        </ul>
    </div>


    <div class="main-content">
        <div class="header">
            <h2>User Details</h2>
            <div class="profile-pic">
                <img src="../assets/logo.jpg" alt="Profile Picture">
            </div>

        </div>
        <!--HTML table with student data-->
        <table id="tableID" class="display" class="client-request-table">
            <thead>
                <tr>
                    <th>SL.</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Guardian Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>HEalth Record</th>
                    <th>Hobby</th>
                    <th>Plan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($user_data)) {
                    $i++;
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['age'] ?></td>
                        <td><?php echo $row['g_name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['number'] ?></td>
                        <td><?php echo $row['address'] ?></td>
                        <td><?php echo $row['health_record'] ?></td>
                        <td><?php echo $row['hobby'] ?></td>
                        <td><?php echo $row['plan'] ?></td>
                        <td style="color: red;"><?php echo $row['status'] ?></td>
                        <td> <?php
                                if($row['status'] == "active") { ?>
                                <a class="btn btn-secondary" href="status.php?status=blocked&id=<?php echo $row['id']?>">Block</a>
                            <?php  }elseif ($row['status'] == "blocked") {?>
                                <a class="btn btn-Success" href="status.php?status=active&id=<?php echo $row['id']?>">Active</a>
                                <a class="btn btn-danger" href="status.php?status=delete&id=<?php echo $row['id']?>">Delete</a>
                            <?php } ?>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#tableID').DataTable({

                searching: true
            });
        });
    </script>
</body>

</html>

<