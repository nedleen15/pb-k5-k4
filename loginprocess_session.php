<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sah =(($username == 'aiman' AND $password =='aiman97'));
$_SESSION['id'] = $sah;

if($_SESSION['id'])
{
	
	echo "<a href=\"kira.php\">GO TO CALCULATOR</a>";
}
else
{
	echo "SORRY,PLEASE TRY AGAIN";
}
?>
