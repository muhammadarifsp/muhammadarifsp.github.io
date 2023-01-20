<!--
Into this file, we write a code for logout.
-->
<?php
    session_start();
	session_destroy();
    unset($_SESSION["username"]);
    header("Location:index.php");


?>