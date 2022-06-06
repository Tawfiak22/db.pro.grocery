<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organic_grocery_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (username, password, address, email, tel, card, name, surname)
VALUES ('Mike13', 'Evans13!', 'Address2','Mike13@gmail.com' '123456789110', '1122233344455567', 'Mike', 'Evans')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
?>

</body>
</html>