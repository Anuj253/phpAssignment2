<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Signup</title>
    <!-- Replace Bulma CSS with Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">SIGN UP PAGE</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="name">NAME</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="pass">PASSWORD</label>
                    <input class="form-control" type="password" name="pass">
                </div>
                <div class="form-group">
                    <label for="pass2">CONFIRM PASSWORD</label>
                    <input class="form-control" type="password" name="pass2">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="submit">SUBMIT</button>
                </div>
                <div class="form-group">
                    <p class="subtitle">DO NOT WANT TO SIGN IN?</p>
                    <a class="btn btn-link" href="signup.php">Go Back</a>
                </div>
                <div class="form-group">
                    <p class="subtitle">ALREADY HAVE AN ACCOUNT?</p>
                    <a class="btn btn-link" href="login.php">Login</a>
                </div>
            </form>
        </div>
    </section>

    <?php
    require('db.php');
    $database = new Db();    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = $_POST['name'];
        $password = $_POST['pass'];
        $password2 = $_POST['pass2'];
        $database->signup($uname, $password, $password2);
    }
    ?>
</body>
</html>
