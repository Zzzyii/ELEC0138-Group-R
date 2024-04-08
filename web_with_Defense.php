<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Create a connection to the database
    $conn = new mysqli("localhost", "test_user", "password", "test_db");

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $sql = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    
    // Bind parameters to the prepared statement
    $sql->bind_param("ss", $_POST['username'], $_POST['password']);

    // Execute the statement
    $sql->execute();

    // Get the result
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Login failed!";
    }
    
    // Close the statement and connection
    $sql->close();
    $conn->close();
}
?>
<form action="test.php" method="post">
    Username: <input type="text" name="username" /><br />
    Password: <input type="password" name="password" /><br />
    <input type="submit" value="Login" />
</form>
