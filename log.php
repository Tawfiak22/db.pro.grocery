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
        <li><a class="active" href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="product.html">PRODUCT</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="contact.html">CONTACT</a></li>
        <li><a href="reg.html">SING UP</a></li>
        <li><a href="log.php">LOG IN</a></li>
        <li><a href="order.php">ORDER</a></li>
      </ul>
    </nav>

    <!-- The H1 + main image Section -->
    <h2>Login</h2>

    <form method="post">
    
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <a href="/logout.php"> logout </a>
        <input type="submit" name="submit">
      </div>
      </div>
    </form>



<!-- The Footer Section -->
<footer>
  <p>Powered by me</p>
</footer>
<?php

//Login part
include("db.connection.php");

if(isset($_POST["submit"])) {
  $user=($_POST["username"]);
  $sql = "SELECT password FROM users WHERE username='$user'";
  $result = $conn->query($sql);
  $found=0;
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          if($row["password"]==$_POST["password"])
      {
        echo "Ok";
        $found=1;
        $_SESSION["username"] = $user;
        break;
      }
      }
    if($found==0)
    {
      echo "Bad";
    }
}

		if(isset($_SESSION["username"])) {
			header('Location: index.html');			
		}
	}
 

include("end.connection.php");
?>
</body>
</html>