<?php 
if(!$_SESSION){
   session_start();
}
?>
<h2>Account Login</h2>
<form method="post" action="." id="loginForm">
    <label>Password:</label><br>
    <input type="password" name="logPassword" id="logPassword"/><br><br>
    <label for="Login">&nbsp;</label>
    <input type="submit" name="Login" id="Login" value="Login">
</form>
