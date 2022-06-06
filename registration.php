<html>
<head>
	<title>Register</title>
</head>
<body>
<?php

include("db.connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$tel = $_POST['tel'];
	$card = $_POST['card'];
	$address = $_POST['address'];

	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='registration.php'>Go back</a>";
	} 
    
    else {
		mysqli_query($conn, "INSERT INTO users(name, surname, email, username, password, tel, card, address, shopper) VALUES('$name', '$surname', '$email', '$user', '$pass', '$tel', '$card', '$address', 1)")
			or die("Could not execute the insert query. Try again.");
			
		echo "Registration successfully!";
		echo "<br/>";
		echo "<a href='log.php'>Login</a>";
	}
} 
include("end.connection.php");
?>
	<p><font size="+2">Register</font></p>
	<form name="form1" method="post" action="./registration.php">
		<table width="75%" border="0">
		<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>  
				<td width="10%">Surname</td>
				<td><input type="text" name="surname"></td>
			</tr>
			<tr> 
				<td>Telephone</td>
				<td><input type="text" name="tel"></td>
			</tr>
			<tr> 
				<td>Card</td>
				<td><input type="text" name="card"></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>			
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

</body>
</html>