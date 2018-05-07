<?php

session_start();

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



if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if(empty($_POST['username']) || empty($_POST['password'])) {
        header("Location: ../login.php?login=empty");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck < 1) {
            header("Location: ../login.php?login=error1");
            exit();
        }
        else {
            if ($row = mysqli_fetch_assoc($result)) {
                $hashedPwdCheck = password_verify($password, $row['password']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../login.php?login=error2");
                    exit();
                }
                elseif ($hashedPwdCheck == true) {
                    $_SESSION['u_ID'] = $row['ID'];
                    $_SESSION['u_username'] = $row['username'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_password'] = $row['password'];
                    header("Location: ../index.php");
                    exit();
                }
            }
        }
    }
}
else {
    header("Location: ../login.php?login=error");
    exit();
}