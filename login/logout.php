<?php

session_start();

if(isset($_SESSION['username']))
{
	unset($_SESSION['username']);
	session_destroy();
	
}
header("Location: /webf/home/index.html");
/*pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"*/
?>