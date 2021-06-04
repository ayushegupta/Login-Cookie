<?php
if($_POST["txtuname"]==$_COOKIE["cookiename"] &&
$_POST["txtpass"]==$_COOKIE["cookiepwd"])
echo "Login Successful";
else
echo "Invalid User";
?>