<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $conn = new mysqli("localhost", "test_user", "password", "test_db");

    if ($conn->connect_error) {
        die("fail to connect: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows > 0) {
	session_start();
	$_SESSION['username'] = $username;
	header("Location: welcome.php");
	exit();
    } else {
	header("Location: index.html?error=true");
	exit();
    }
}
