<?php
session_start();
require('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['pass'];
    $db = new Db();
    $result = $db->login($name, $password);

    if ($result) {
        // Perform any necessary actions upon successful login
        $_SESSION['username'] = $name;
        header("Location: dashboard.php"); // Redirect to a dashboard or another page
        exit();
    } else {
        $error_message = "Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mt-5">
                    <h1 class="text-center">LOGIN PAGE</h1>
                    <form method="POST" action="signup.php">
                        <div class="form-group">
                            <label for="name">NAME</label>
                            <input class="form-control" type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">PASSWORD</label>
                            <input class="form-control" type="password" name="pass" required>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit" name="submit">SUBMIT</button>
                    </form>
                    <div class="mt-3 text-center">
                        <?php if (isset($error_message)): ?>
                            <p class="text-danger"><?= $error_message ?></p>
                        <?php endif; ?>
                        <p class="subtitle">DON'T HAVE AN ACCOUNT? <a class="btn btn-link" href="signup.php">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
