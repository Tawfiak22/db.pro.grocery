<html>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organic_grocery_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else{
    echo "Connected successfully!";
}

//Close connection:
$conn->close();
?>
</body>
</html>

