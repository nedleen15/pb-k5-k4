<!DOCTYPE html>
<html>
<head>
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
	<title>CALCULATOR SYSTEM</title>

	<center>
		<h1>UPDATED LIST OF RESULTS</h1>		
		
		<table border="1"  cellpadding="6" cellspacing="0" bgcolor="#FFFFFF" >
			<tr bgcolor="#FFFFFF">
				
				<th><b>Nama</b></th>
				<th><b>Hasil kiraan</b></th>
				
			</tr>
			<?php 
				include 'config.php';
				$display = mysqli_query($conn, 'SELECT * FROM papar');
				while ($result=mysqli_fetch_array($display)) {
					
				
				echo "
					<tr>
				<td align='center'>".$result['nama']."</td>
				<td align='center'>".$result['hasil']."</td>
				<td align='center'>
				
					</tr>";
				
			}
			?>
			</table><br>
<center>
<div>
        <label>Choose background table :</label>
        <button type="button1" onclick="changebgcolor('yellow');">Yellow</button>
        <button type="button2" onclick="changebgcolor('#DDA0DD');">Plum</button>
        <button type="button3" onclick="changebgcolor('#708090');">Slategray</button>
         <button type="button4" onclick="changebgcolor('#FFE4E1');">Mistyrose</button>
        <button type="button5" onclick="changebgcolor('#8FBC8F');">Darkseagreen</button>
    </div>
<script type="text/javascript"><?php echo $bgimage_session."();"; ?></script>
</center>
		<br> <a href="kira.php">Calculator</a>
	</center>
</body>
</html>