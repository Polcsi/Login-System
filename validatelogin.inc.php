<?php

require_once("classes/validate.php");

$username = $_POST['username'];
$password = $_POST['password'];

$valid = Validate::validateLogin($username, $password);
if($valid)
{
    $_SESSION['login'] = $username;
    header("Location: main.php");
} else {
    require_once("loginpage.inc.php");
}

?>