<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =  "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
   echo "Error: Unable to connect to MySQL." . PHP_EOL;
   exit;
 }

 // <?php
 //             $sql = "SELECT * FROM users;";
 //             $result = mysqli_query($conn, $sql);
 //             $resultCheck = mysqli_num_rows();
 //             if (resultCheck > 0) {
 //               while($row = mysqli_fetch_assoc($result)) {
 //                 echo $row['ID'];
 //               }
 //             }
 //

$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
echo 'aa';
$resultCheck = mysqli_num_rows($result);
echo 'bb';
if ($resultCheck > 0) {
  echo 'dd';
  while($row = mysqli_fetch_assoc($result)) {
    echo $row['username'];
  }
}

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "name: " . $row["name"]. " - comment: " . $row["comment"]." - size: ". $row["size"]. "<br>";
//     }
// } else {
//     echo "0 rssaesults";
// }
mysqli_close($link);
?>
