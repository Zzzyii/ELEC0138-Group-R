<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $conn = new mysqli("localhost", "test_user", "password", "test_db");

    if ($conn->connect_error) {
        die("fail to connect: " . $conn->connect_error);
    }

    // Prevent SQL Injection with Preprocessing Statements
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: index.html?error=true");
        exit();
    }
    
    $stmt->close();
    $conn->close();
}
?>
