<?php
class Db {
    private $con;

    function __construct(){
        $hostname = 'localhost:3307';
        $username = 'root';
        $password = '';
        $database = 'mydb';

        $this->con = mysqli_connect($hostname, $username, $password, $database);

        if (!$this->con) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function signup($uname, $password, $password2)
    {
        if ($this->isUsernameAvailable($uname) && $password == $password2) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user(name, password) VALUES('$uname', '$hash')";
            mysqli_query($this->con, $sql);
            $_SESSION['user_name'] = $uname;
            header('location: signup.php');
            echo"bam gya page";
        } else {
            echo "Username is already taken or passwords don't match.";
        }
    }

    public function login($name, $password)
    {
        $result = $this->getUserByName($name);

        if ($result && password_verify($password, $result['password'])) {
            $_SESSION['user_name'] = $name;
            header('location: signup.php');
        } else {
            echo 'SORRY, THERE IS NO ACCOUNT WITH THIS INFORMATION<br>';
            echo 'DO YOU WANT TO CREATE A NEW ACCOUNT?';
            echo ' <a href="index.php"> SIGN UP </a>';
        }
    }

    private function isUsernameAvailable($uname)
    {
        $check = "SELECT * FROM user WHERE name='$uname'";
        $result = mysqli_query($this->con, $check);
        return mysqli_num_rows($result) == 0;
    }

    private function getUserByName($name)
    {
        $check = "SELECT * FROM user WHERE name='$name'";
        $result = mysqli_query($this->con, $check);

        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        }
        
        return null;
    }
}
?>
