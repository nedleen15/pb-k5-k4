<!DOCTYPE html>
<html>
<head>
	<title>CALCULATOR SYSTEM</title>
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #3F5A6F;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #46B2B4;
}

.active {
  background-color: #5697C9;
}
</style>
</head>
 <body bgcolor="#87CEEB"><center>
<img src="banner.jpg" width="1350" height="200"  align="bottom"></center>
 	<ul>
  <li><a  href="login.php">HOME</a></li>
  <li><a href="kira.php">CALCULATOR</a></li>
  <li><a class="active" href="logout.php">LOG OUT</a></li>
</ul>

 	<center>
 	<H1>THANKS YOU FOR USING CALCULATOR SYSTEM</H1>
 	
</center>
<center>
<?php
session_start();
session_destroy();
echo "SUCCESSFUL TO LOG OUT!";

echo "<a href=\"login.php\">Home</a>";
?>
</center>
</H1>
</center>
</body>
</html>
