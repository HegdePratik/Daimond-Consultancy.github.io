<?php
include_once 'database.php';
if(isset($_POST['submit']))
{	 echo "Connected";
     $full_name = $_POST['full_name'];
     $email = $_POST['email'];
     $mobile_number = $_POST['mobile_number'];
     $password = $_POST['password'];
     $Photo = $_POST['Photo'];
     $Id_proof = $_POST['Id_proof'];
     $Certificate = $_POST['Certificate'];
	 $sql = "INSERT INTO counsellor (full_name,email,mobile_number,password,Photo,Id_proof,Certificate)
	 VALUES ('$full_name','$email','$mobile_number','$password','$Photo','$Id_proof','$Certificate')";
	 if (mysqli_query($conn, $sql)) {
		header("Location: Clogin.php");
	 } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>