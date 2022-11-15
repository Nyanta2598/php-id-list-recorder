<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <?php include 'classes/header.php'?>
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <?php
                    // Your message code
                    if(isset($_SESSION['message']))
                    {
                        echo '<h4 class="alert alert-warning">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                    } // Your message code
                ?>

                <h4>Welcome to Home Page</h4>

                <?php 
                // Checking is User Logged In
                if(isset($_SESSION['authentication']))
                {
                    ?>
                        <h4>My ID: <?= $_SESSION['auth_user']['user_id']; ?></h4>
                        <h4>My Full Name: <?= $_SESSION['auth_user']['user_lname']; ?>, <?= $_SESSION['auth_user']['user_fname']; ?></h4>
                        <h4>My Email: <?= $_SESSION['auth_user']['user_email']; ?></h4>
                        <h4>My Password: <?= $_SESSION['auth_user']['user_password']; ?></h4>
                        <a href="classes/logout.php" class="btn btn-danger mt-3">Logout</a>
                    <?php
                }
                ?>

                <?php 
                    if(!isset($_SESSION['authentication']))
                    {
                        ?>
                        <a href="classes/logout.php" class="btn btn-danger mt-3">Logout</a>
                        <?php
                    }
                ?>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>