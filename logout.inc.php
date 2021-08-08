<?php

if(isset($_SESSION['login']))
{
    unset($_SESSION['login']);
}
header("Location: main.php");

?>