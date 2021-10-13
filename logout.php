<?php
session_start();
session_destroy();
setcookie("member_login","",-20);
setcookie("member_password","",-20);
header("location:index.php");

?>