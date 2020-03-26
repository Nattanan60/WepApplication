<?php
// login.php

?>
<html>
    <head>
    <link rel="stylesheet" href="login1.css">
    <title>Login</title></head>
    <body>
        <form action="checkLogin.php">
        <div id="grob">
            <p>LOGIN</p> 
            <div id="vv">
             <input type="text" name="user" placeholder="USERNAME" required><br>
             <input type="password" name="pass" placeholder="PASSWORD" required><br>
            </div>
            <input type="submit" value="Login"><br>
            <input type="reset" value="Clear">
        </div>
        </form>
    </body>
</html>