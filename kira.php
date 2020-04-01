<?php if(isset($_POST['nombor'])){ 
$pertama = $_POST['pertama'];
$kedua = $_POST['kedua'];
$operasi = $_POST['operasi'];
 switch ($operasi) {
     case 'tambah':
     $hasil = $pertama + $kedua;
   break;
   case 'kurang':
    $hasil = $pertama - $kedua;
   break;
   case 'kali':
    $hasil = $pertama * $kedua;
    break;
   case 'bagi':
    $hasil = $pertama / $kedua;
   }
}
 ?>
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>CALCULATOR</title>

  <link href="style.css" rel="stylesheet" type="text/css">
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

 <body bgcolor="#87CEEB">
<img src="banner.jpg" width="1350" height="200"  align="bottom">
    <ul>
	<li><a href="logout.php">LOG OUT</a></li>
  <li><a href="papar.php">LIST</a></li>
  <li><a class="active"href="kira.php">CALCULATOR</a></li>
  <li><a href="login.php">HOME</a></li>
  
</ul>
  <center>
  <H1>HOPEFULLY HELP YOU FIND THE ANSWER</H1>
  
</center>


  <center>
 <div class="kalkulator">
  <h1>CALCULATOR</h1>
  <form action="" action="" method="post">
    
   <input class="number" type="number" name="pertama" placeholder="Please insert the first number"><br><br>
   <select class="option" name="operasi">
    <option value="tambah">+(plus)</option>
    <option value="kurang">-(minus)</option>
    <option value="kali">x(multiply)</option>
    <option value="bagi">/(divide)</option>
   </select><br><br>

   <input class="number" type="number" name="kedua" placeholder="Pleace insert the second number">
   <br><br>
   
   <input type="submit" name="nombor" class="tombol" value="Equal"><br>
  </form>


  
  <?php if(isset($_POST['nombor'])){ ?>
  <input type="text" value="<?php echo $hasil; ?>" class="number">
  <?php }else{ ?>
   <input type="text" value="0" class="number">
  <?php } ?> <br>

</div></center>
 </body>
 </html>
