<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "test_user", "password", "test_db");
    if ($conn->connect_error) {
        die("fail to connect: " . $conn->connect_error);
    }

    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']); 

    $checkUser = $conn->query("SELECT username FROM users WHERE username = '$username'");
    if ($checkUser->num_rows > 0) {
        echo "User name already exists, please select another user name.";
    } else {
        // Insert new user
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')"; 
        if ($conn->query($sql) === TRUE) {
            echo "Registration Successful";
        } else {
            echo "Registration Failed" . $conn->error;
        }
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up for a New Account</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f0f0; padding: 20px; }
        .container { max-width: 300px; margin: auto; background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        input[type="submit"] { background-color: #007bff; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; width: 100%; }
        input[type="submit"]:hover { background-color: #0056b3; }
        .footer { margin-top: 20px; text-align: center; }
    </style>
</head>
<body>

<div class="container">
    <h2>Sign Up</h2>
    <form action="register.php" method="post">
        <div>
            <label for="username">Username:</label><br />
            <input type="text" id="username" name="username" required />
        </div>
        <div>
            <label for="password">Password:</label><br />
            <input type="password" id="password" name="password" required />
        </div>
        <div>
            <input type="submit" value="Sign Up" />
        </div>
    </form>
    <div class="footer">
        <a href="login.php">Login</a> | <a href="#">Forget password?</a>
    </div>
</div>

</body>
</html>
