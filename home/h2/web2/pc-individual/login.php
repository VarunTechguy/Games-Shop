<?php
$feedback = $_POST['feedback'];

if (!empty($feedback))  {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "from";
    //create connection
    $con = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {

     $INSERT = "INSERT Into ord (feedback) values(?)";

     $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("s", $feedback);
     $stmt->execute();
     echo "New record inserted sucessfully";
     $stmt->close();
     $conn->close();
    }
}
else {
 echo "All field are required";
 die();
}
?>
