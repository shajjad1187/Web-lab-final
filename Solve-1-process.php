<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $id = $_POST['id'];
	 $age = $_POST['age'];
	 $user_name = $_POST['user_name'];
	 $password = $_POST['password'];
	 $sql = "INSERT INTO student (name,id,age,user_name,password)
	 VALUES ('$name','$id','$age','$user_name','$password')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>