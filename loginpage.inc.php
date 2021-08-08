<?php
if(!isset($_SESSION['login'])) {
?>
    <div class="input-container">
        <form method="post" name="content" action="main.php">
            <h1>Login Form</h1>
            <div class="inputbox">
                <input type="text" name="username" required="" autocomplete="off">
                <span>Username</span>
            </div>
            <div class="inputbox">
                <input type="password" name="password" required="" autocomplete="off">
                <span>Password</span>
            </div>
            <button type="submit">Login</button>
            <input type="hidden" name="content" value="validatelogin">
        </form>
    </div>
<?php
} else {
    include("start.inc.php");
}
?>