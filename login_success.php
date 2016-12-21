<?php
session_start();
if(!session_is_registered(username)){
header("location:main_login.php");
}
?>

<html>
<body>
Succesfully Logged in
<a href="logout.php">Logout</a>
</body>
</html>