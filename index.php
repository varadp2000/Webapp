<?php
require_once 'config.php';
include_once 'include/header.php';




?>

<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:dashboard.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION);
    header('location: index.php');
}

?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Welcome</title>
    </head>
    <body>
        <br><br>
        <div align="center">
        <div class="alert-dark" style="width:50rem" align="center">
            <button class="btn btn-dark" type="button"><a class="btn btn-dark" href="Signup.php">Sign Up</a></button>
            <button class="btn btn-dark" type="button"><a class="btn btn-dark" href="Login.php">Login</a></Button>
        </div>
</div>

    </body>
</html>