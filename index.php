<?php
include('./classes/DB.php');
include('./classes/Login.php');

if (Login::isLoggedIn()) {
        echo 'Logged In as USER_ID ';
        echo Login::isLoggedIn();
} else {
        echo 'Not logged in <br>';

        
}

?>
<p />
<input type="button" name="change" value="change" onclick="window.location.href='change-password.php'"> 
<input type="button" name="logout" value="logout" onclick="window.location.href='logout.php'">