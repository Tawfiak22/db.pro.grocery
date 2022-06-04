<!DOCTYPE html>
<html>
<body>
 
<?php
 
    echo "Logged out successfully";
 
    session_start();
    if (session_destroy()) 
    
    {
        header("location: index.php");
    }
 
?>
 
</body>
</html>