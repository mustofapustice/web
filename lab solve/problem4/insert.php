<?php
// database connection code
if(isset($_POST['submit']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','mustofa');

// get the post records

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['password'];
$txtMessage = $_POST['gender'];

// database insert SQL code
$sql = "INSERT INTO data(`name`, `email`, `password`, `gender`) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>