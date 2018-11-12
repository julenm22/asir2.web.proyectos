<?php

$servername = "localhost:3306";
$username = "root";
$password = "Admin1234";
$db = "asir-web";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_POST['user'];

$query = "DELETE FROM login WHERE user= '$user'";
$result = mysqli_query($conn,$query);
echo header('location:login.php');
?>