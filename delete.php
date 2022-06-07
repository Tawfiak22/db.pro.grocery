<html>
<body>
<?php

if(isset($_SESSION["username"])){
    $result = $conn->query("DELETE FROM users WHERE username='$_SESSION[username]'");
        echo "User deleted";
}

else {
        echo "Cannot delete user";
    }

?>
</body>
</html>

