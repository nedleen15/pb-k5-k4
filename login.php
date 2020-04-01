<!DOCTYPE html>
<html>
<head>
	<title>CALCULATOR SYSTEM</title>
	
	<script>
    // Function to change webpage background color
    function changeBodyBg(color){
        document.body.style.background = color;
    }
   
</script>
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


.button {
background-color:#4CAF50;

border:none;
color:white;
padding:10px 15px;
text-align:center;
text-decoration:none;
display:inline-blok;
font-size:16px;
margin:4px 2px;
cursor:pointer;
}


</style>
</head>
 <body bgcolor="#87CEEB"><center>
<img src="banner.jpg" width="1350" height="200"  align="bottom"></center>
 	<ul>
  <li><a class="active" href="login.php">HOME</a></li>
  <li><a href="logout.php">LOG OUT</a></li>
</ul>

 	<center>
 	<H1>WELCOME TO CALCULATOR SYSTEM</H1>
 	
</center>



<form action="loginprocess_session.php" method="post">
	<h1><center>USER LOGIN</center></h1>
<h4><center>PLEASE INSERT YOUR USERNAME AND PASSWORD.</center></h4>
<center>
	
	Username:<input type="text"name="username"size="20"/><br>
	Password:<input type="password"name="password"size="10"/>

	<br>
</br>
<input type='submit' name='log in'value='submit'>
<br></br>
<a href="signup.php"target="top"value="sign up">FOR FIRST TIME USERS (Sign Up)</a><br>
</br>

</br>
</center>
</form>
<center>
<div>
        <label>Choose Background :</label>
        <button type="button1" onclick="changeBodyBg('yellow');">Yellow</button>
        <button type="button2" onclick="changeBodyBg('#DDA0DD');">Plum</button>
        <button type="button3" onclick="changeBodyBg('#708090');">Slategray</button>
         <button type="button4" onclick="changeBodyBg('#FFE4E1');">Mistyrose</button>
        <button type="button5" onclick="changeBodyBg('#8FBC8F');">Darkseagreen</button>
    </div>
<script type="text/javascript"><?php echo $bgimage_session."();"; ?></script>
</center>


</body>

</html>
