<?php
//
$servername = "localhost:3306";
$username = "root";
$password = "Admin1234";
//$password = "";
$db = "asir-web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
// read from formulary
$user = $_POST["user"];
$password = $_POST["password"];
//echo $user;
// update user
$query = "UPDATE login SET password = '$password' WHERE user = '$user'";
//echo $query;
$result = mysqli_query($conn, $query);
header('Location: '."login.php");
?>