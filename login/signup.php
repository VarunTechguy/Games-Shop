<?php 
session_start();

	include("connection.php");
	include("functions.php");
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	}
  $nameErr = $phoneErr = "";
	if(isset($_POST['register']))
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
    	$email = $_POST['email'];
		$phone = $_POST['phone'];	
		//hasing the passwords
		$password = md5($password);
		$cpassword = md5($cpassword);

		if($password==$cpassword)
		{//...checking multiple emails
			$query = "select * from users where email='$email'";
			$query_run = mysqli_query($con, $query);

			if(mysqli_num_rows($query_run)>0)
			{
				echo'<script>alert("Email already exsist")</script>';
				//header("Location: form.html");
			}
			else{
				//save to database
				$query = "insert into users (username,password,email,phone) values ('$username','$password','$email','$phone')";
				$qrun = mysqli_query($con, $query);
				if($qrun)
				{
					echo'<script>alert("Registered Successfully")</script>';		
					header("Location: form.html");
				}
				else
				{
				echo'<script>alert("Registered Failed")</script>';
				//header("Location: form.html");
				}
   			}}
   		else
			{
				echo'<script >alert("Passwords do not match")</script>';		
				//header("Location: form.html");
				//echo "Please check the details entered!";
			}			
}

?>