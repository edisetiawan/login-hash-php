<?php
session_start();
if(!empty($_SESSION['username']))
{
?>
<h1>Halaman Admin</h1>
<a href="logout.php">Logout</a>
<?php
}else{
	header('location: login.php');
}
?>