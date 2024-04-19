<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .footer { 
            position: fixed; 
            left: 0; 
            bottom: 0; 
            width: 100%; 
            background-color: #007bff; 
            color: white; 
            text-align: center; 
            padding: 10px; 
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Welcome!, <?php echo htmlspecialchars($username); ?>!</h1>
        <p class="lead">It is Group R's demo webpage!</p>
        <hr class="my-4">
        <p>Please click link below to explore website</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">homepage</a>
        <a class="btn btn-secondary btn-lg" href="#" role="button">personal information</a>
        <a class="btn btn-danger btn-lg" href="logout.php" role="button">log out</a>
    </div>
</div>

<div class="footer">
    <p>all right reserved © ELEC0138 group R <?php echo date("Y"); ?></p>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
