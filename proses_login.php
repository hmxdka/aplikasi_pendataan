<?php
session_start();

$username = $_POST['username'];

$password = $_POST['password'];

if ($username == "dika" && $password == "hamdika"){$_session['username'] = $username;
	header("location:admin.php");
}else{
	header("location:admin.php");
}
?>