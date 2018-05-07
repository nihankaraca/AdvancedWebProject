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

//$username= 'damla';
//////$sql = "SELECT * FROM users;";
//$sql = "SELECT * FROM users WHERE username='$username';";
//$result = mysqli_query($conn, $sql);
////echo $result;
//$resultCheck = mysqli_num_rows($result);
//if ($resultCheck > 0) {
//   while($row = mysqli_fetch_assoc($result)) {
//     echo $row['username'];
//   }
//}

$conn->close();
?>
