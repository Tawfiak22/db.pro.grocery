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

/*

//READ
if(isset($_SESSION["username"])){
    $result = $conn->query("SELECT * FROM ordini AS o JOIN utenti AS u ON o.userid=u.userid WHERE username='$_SESSION[username]'");
        echo "<h1>Your orders</h1>";
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
    echo "Login";
}
*/

//Close connection:
$conn->close();
?>

</body>
</html>