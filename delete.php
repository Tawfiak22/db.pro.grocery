<html>
<body>
<?php
if(isset($_SESSION["username"])){
    $result = $conn->query("DELETE FROM users WHERE username='$_SESSION[username]'");
        echo "okay";

else{
        echo "not okay";
    }
}
?>
</body>
</html>

