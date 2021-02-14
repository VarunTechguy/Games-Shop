<?php 

session_start();

	include("connection.php");
	include("functions.php");

	
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	 }
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = validate($_POST['username']);
		$password = validate($_POST['password']);

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$password = md5($password);
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['username'] = $user_data['username'];
						header("Location: /webf/home/index2.php");
					}
				}
			}
			echo '<script>alert("Username or password is incorrect");</script>'; 
		}else
		{
			echo '<script>alert("Username or password is incorrect");</script>'; 
			//echo "wrong username or password!";
		}
	}

?>
