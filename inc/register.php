<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname =  "myDB";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['create'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if(empty($_POST['username']) ||  empty($_POST['email']) || empty($_POST['password'])) {
        header("Location: ../login.php?register=empty");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            header("Location: ../login.php?register=invalid");
            exit();
        }
        else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../login.php?register=invalid");
                exit();
            }
            else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPwd');";
                mysqli_query($conn, $sql);
                header("Location: ../index.php");
                exit();
            }
        }
    }
}
else {
    header("Location: ../login.php");
    exit();
}
