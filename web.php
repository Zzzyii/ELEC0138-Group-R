<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $conn = new mysqli("localhost", "test_user", "password", "test_db");

    if ($conn->connect_error) {
        die("connection fail: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "login successfully";
    } else {
        echo "login failure";
    }
    $conn->close();
}
?>
<form action="test.php" method="post">
    username: <input type="text" name="username" /><br />
    password: <input type="password" name="password" /><br />
    <input type="submit" value="login" />
</form>
