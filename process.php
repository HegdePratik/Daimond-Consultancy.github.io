<?php
include_once 'database.php';
if(isset($_POST['Submit']))
{	
     $full_name = $_POST['full_name'];
     $area_of_interest = $_POST['area_of_interest'];
     $email = $_POST['email'];
     $mobile_number = $_POST['mobile_number'];
     $password = $_POST['password'];
     $result = $_POST['result'];
	 $sql = "INSERT INTO registration (full_name,area_of_interest,email,mobile_number,password,result)
	 VALUES ('$full_name','$area_of_interest','$email','$mobile_number','$password','$result')";
	 if (mysqli_query($conn, $sql)) {
		header("Location: login.php");
	 } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
else
{
	echo("ERROR");
}
?>
