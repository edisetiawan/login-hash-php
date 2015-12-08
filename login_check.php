<?php
include('inc-db.php');
$username=$_POST['username'];
$password=$_POST['password'];

$sql_check="select * from admin where 
			admin_username='".$username."'";

$result = mysql_query($sql_check);

$getUser = mysql_num_rows($result);

//print_r($getUser); die();
$getDataUser = mysql_fetch_array($result);
if ($getUser === 1) 
{
	

	if (password_verify($password,$getDataUser['admin_password'])) 
	{
		session_start();
		$_SESSION['username']=$getDataUser['admin_username'];
		header('location: admin_area.php');
		//echo "Is Valid User";
	}
	else
	{
		echo "Invalid User";
	}	
	

}
else
{
	echo "Invalid User";
}



?>