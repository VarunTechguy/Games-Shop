<?php

function check_login($con)
{

	if(isset($_SESSION['username']))
	{

		$id = $_SESSION['username'];
		$query = "select * from users where username = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	else{
		echo '<script>alert("Login/Signup to access this site")</script>';
	}
	//redirect to login
	header("Location: /login/form.html");
	die;

}
//Strip unnecessary characters (extra space, tab, newline) from the user input data
//Remove backslashes (\) from the user input data
?>