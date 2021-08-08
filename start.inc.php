<?php
if(isset($_SESSION['login'])) {
?>
<div>
    <h1>You Logged In!</h1>
    <a href="main.php?content=logout">Logout</a>
</div>
<?php
} else {
    require_once("loginpage.inc.php");
}
?>