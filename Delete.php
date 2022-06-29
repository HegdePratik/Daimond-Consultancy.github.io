<?php
session_start();

$servername='localhost';
$username='root';
$password='';
$dbname = "cg";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
else{
    echo "Connected Successfully!!";
}
// checking session is valid for not 


// for deleting user
    if(isset($_POST['sr_no']))
    {
        $adminid=$_POST['sr_no'];
        $msg=mysqli_query($con,"delete from registration where sr_no='$adminid'");
        if($msg)
        {
        echo "<script>alert('Data deleted');</script>";
        }
    }

?>