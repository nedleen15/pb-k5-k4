<?php
include('config.php');

$username=$_POST['username'];
$password=$_POST['password'];
$sah =(($username == 'aiman' AND $password =='aiman97'));
$_SESSION['id'] = $sah;
echo"<br>";

$iquary="INSERT INTO daftar(username,password) VALUES('$username','$password')";
if(mysqli_query($conn,$iquery))
        {echo "YOUR REGISTER IS SUCCESFULLY!!!<a href='login.php'>TRY AGAIN</a>";}
else
	{echo "YOUR REGISTER IS SUCCESFULLY!!!!.<a href=\"login.php\">LOGIN</a>";}
?>
