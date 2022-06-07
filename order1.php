<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css"/>
    <script src="form.js"></script>

    <title>Online Grocery Store</title>
  
  </head>

  <body>
    <nav>
      <ul class="topnav">
      <li><a class="active" href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="product.php">PRODUCT</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="reg.php">SING UP</a></li>
        <li><a href="log.php">LOG IN</a></li>
        <li><a href="order.php">ORDER</a></li>
      </ul>
    </nav>
  
    
    <!-- The H1 + main image Section -->
    <div id="container">
      <div class="home-section" id="heading-section">
        <h1>Online Grocery Store</h1>
      </div>

  </body>

<body>

<!-- The Footer Section -->
<footer>
  <p>Powered by me</p>
</footer>

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

//READ of CRUD
if(isset($_SESSION["username"])){
    $result = $conn->query("SELECT * FROM orders AS o JOIN users AS u ON o.userid=u.userid WHERE username='$_SESSION[username]'");
        echo "<h1>Your orders</h1>";
        echo "<a href='delete.php'>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<span> $row[orderid] $row[del_date] $row[tot_amount] $row[status]</span><br />";
        }
    } else {
        echo "0 results";
    }
}
else{
    echo "You must be logged";
}

//Close connection:
$conn->close();
?>

</body>
</html>