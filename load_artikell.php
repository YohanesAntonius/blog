<?php
include('config.php');
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

<h2>ICW Minta Dewas Serius Tangani Laporan soal Heboh Ketua KPK Naik Heli</h2>
<br>
<div class="w3-row">
  <div class="w3-col 40 s20">
    <div class="w3-card-4 w3-margin w3-light-grey">
      <div class="w3-container">
        <!-- <h2>PHP Form Validation Example</h2> -->
        <br><br><div class="w3-container">            
                <h5>Title description, <span class="w3-opacity">29 Jun 2020</span></h5>
              </div>

            <div class="w3-container">
              <p>Jakarta - Indonesia Corruption Watch (ICW) mengatakan Dewan Pengawas (Dewas) KPK harus menindaklanjuti laporan MAKI terkait dugaan pelanggaran kode etik Ketua KPK Firli Bahuri karena naik helikopter mewah. ICW meminta Dewas KPK juga memberikan tenggat waktu terkait proses pengusutan atas laporan dugaan pelanggaran kode etik yang dilakukan Firli itu. "Dewan Pengawas harus pula memberikan tenggat waktu yang jelas dalam proses penanganan dugaan pelanggaran kode etik ini," kata peneliti ICW Kurnia Ramadhana kepada wartawan, Senin (29/6/2020). Sebab, Kurnia menyebut selama ini proses pengusutan laporan dugaan pelanggaran kode etik di KPK cenderung lambat dan tidak ada kejelasan.</p>
            <div class="w3-row">
        <div class="w3-col m8 s12">
      </div>
    </div>
  </div>
</div>
       <b><p>Powered by : @W3schools.com</p></b>  
</body>
</html>