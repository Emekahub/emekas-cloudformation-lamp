<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAMP Stack Template</title>
</head>
<body>
    <h1>Hello from your VS Code LAMP Stack!</h1>
    <p>PHP Version: <?php echo phpversion(); ?></p>

    <?php
    // Test Database Connection
    $host = 'db'; // Matches the service name in docker-compose
    $user = 'lamp_user';
    $pass = 'secret_user_pass';
    $db   = 'my_app_db';

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        echo "<p style='color:red;'>Database Connection Failed: " . $conn->connect_error . "</p>";
    } else {
        echo "<p style='color:green;'>Successfully connected to the MySQL Database!</p>";
    }
    ?>
</body>
</html>