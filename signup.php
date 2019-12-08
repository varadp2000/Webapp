<?php
require_once 'config.php';
include_once 'include/header.php';

session_start();
if(isset($_SESSION['user'])){
    header('location:dashboard.php');
}
?>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">    
    </head>
    <body>
        <div class="container">
        <div class="form group" style="width:40rem">
        <div class="alert alert-dark">
            <form action="signup.php" method="POST">
                <input class="form-control" type="text" id="fname" placeholder="First Name" name="fname" required><br>
                <input class="form-control" type="text" id="lname" placeholder="Last Name" name="lname" required><br>
                <input class="form-control" type="number" id="cno" placeholder="Contact No" name="cno" required><br>
                <input class="form-control" type="email" id="email" placeholder="Email" name="email" required><br>
                <input class="form-control" type="password" id="pass" placeholder="Password" name="pass" required><br>
                 <input class="btn btn-primary" id="register" type="submit" placeholder="Sign Up" name="Submit">
            </form>
        </div>
        </div>
</div>
    </body>
</html>
<?php
if(isset($_POST['Submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $cno=$_POST['cno'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    
    
        $sql= "INSERT INTO info (fname,lname,pno,email,pass) VALUES(?,?,?,?,?)";
        $stmtinsert= $db->prepare($sql);
        $result= $stmtinsert->execute([$fname,$lname,$cno,$email,$pass]);

    if($result){
        header('Location:login.php');
    }
    else{
        echo 'Error Saving';
    }

    
}

?>
