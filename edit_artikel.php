<?php

include_once('config.php');

if(isset($_POST["simpan"])){
 $id = $_POST["id"];
 $tanggal = $_POST["tanggal"];
 $penulis = $_POST["penulis"];
 $judul = $_POST["judul"];
 $isi = $_POST["isi"];
 if(!empty($id) || !empty($tanggal) || !empty($penulis) || !empty($judul) || !empty($isi)){
  $sql = "insert into list_artikel ( id, tanggal, penulis, judul, isi )" . 
    "values ( '$id','$tanggal','$penulis','$judul','$isi' )";
  mysqli_query($conn, $sql);
  header('location:list_artikel.php');
 }else{
  echo 'Semua data diperlukan. Harap isi semua.!';
 }
}
?>

<!DOCTYPE HTML>  
<html>
<title>UAS_CloudCom</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="w3-light-grey">  

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="uas_cloud.php" class="w3-bar-item w3-button">Home</a>
  <a href="admin.php" class="w3-bar-item w3-button">Admin</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Cloud Computing</h1>
  </div>
</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

<h2>Tulis Artikel</h2>

<!-- <?php
// define variables and set to empty values
$tanggal = $penulis = $judul = $isi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tanggal = test_input($_POST["Tanggal"]);
  $penulis = test_input($_POST["Penulis"]);
  $judul = test_input($_POST["Judul"]);
  $isi = test_input($_POST["Isi"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> -->

<div class="w3-row">
	<div class="w3-col 40 s20">
		<div class="w3-card-4 w3-margin w3-light-grey">
			<div class="w3-container">
				<!-- <h2>PHP Form Validation Example</h2> -->
				<br><br><tr>
				<form method="post" action="edit_artikel.php">  	
  					<td>
                              <input type="hidden" name="id">
  						<h4>Tanggal</h4><input type="text" name="tanggal" placeholder="Masukkan tanggal..." size="30">
  					<br></td>
  		  				<h4>Penulis</h4><input type="text" name="penulis" placeholder="Masukkan penulis..." size="50">
  					<br>
  		  				<h4>Judul</h4><input type="text" name="judul" placeholder="Masukkan judul..." size="80">
  					<br>
  		  			<td><br><textarea name="isi" rows="5" cols="80" placeholder="Masukkan artikel..."></textarea>
  					<br></td>
  		 			<input type="submit" name="simpan" value="Simpan"> <input type="submit" name="cancel" value="Cancel">  
				</form>
				</tr>
			</div>
		</div>
	</div>
</div>
       <b><p>Powered by : @W3schools.com</p></b>	       
</body>
</html>