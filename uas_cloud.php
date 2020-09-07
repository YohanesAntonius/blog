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
  header('location:load_artikel.php');
 }else{
  echo 'Semua data diperlukan. Harap isi semua.!';
 }
}
?>

<!DOCTYPE html>
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
  <a href="session.php" class="w3-bar-item w3-button">List Artikel</a>
  <a href="session_edit.php" class="w3-bar-item w3-button">Edit</a>
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

     
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>MY BLOG</b></h1>
  <p>Selamat datang di blog<span class="w3-tag">#Yohanes Antonius </span></p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <!-- <img src="/w3images/woods.jpg" alt="Nature" style="width:100%"> -->
    <div class="w3-container">
      <h3><b>TITLE HEADING</b></h3>
      <h5>Deskripsi, <span class="w3-opacity">07 April 2020</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <a href="load_artikel.php" class="w3-bar-item w3-button">BACA LAGI »</a>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Komentar  </b> <span class="w3-tag">50</span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <!-- <img src="/w3images/bridge.jpg" alt="Norway" style="width:100%"> -->
    <div class="w3-container">
      <h3><b>BLOG ENTRY</b></h3>
      <h5>Deskripsi, <span class="w3-opacity"> 02 Januari 2020</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <a href="load_artikel1.php" class="w3-bar-item w3-button">BACA LAGI »</a>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Komentar  </b> <span class="w3-badge">5000</span></span></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<br>
  <br>
    <br>
      <br>
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <!-- <img src="/w3images/bridge.jpg" alt="Norway" style="width:100%"> -->
    <div class="w3-container">
      <h3><b>ICW Minta Dewas Serius Tangani Laporan soal Heboh Ketua KPK Naik Heli</b></h3>
      <h5>Deskripsi, <span class="w3-opacity">29 Jun 2020</span></h5>
    </div>

    <div class="w3-container">
      <p>Jakarta - Indonesia Corruption Watch (ICW) mengatakan Dewan Pengawas (Dewas) KPK harus menindaklanjuti laporan MAKI terkait dugaan pelanggaran kode etik Ketua KPK Firli Bahuri karena naik helikopter mewah. ICW meminta Dewas KPK juga memberikan tenggat waktu terkait proses pengusutan atas laporan dugaan pelanggaran kode etik yang dilakukan Firli itu.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <a href="load_artikell.php" class="w3-bar-item w3-button">BACA LAGI »</a>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Komentar  </b> <span class="w3-badge">200</span></span></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<!-- <div class="w3-col l4"> -->
  <!-- About Card -->
 <!--  <div class="w3-card w3-margin w3-margin-top"> -->
  <!-- <img src="/w3images/avatar_g.jpg" style="width:100%"> -->
    <!-- <div class="w3-container w3-white"> -->
      <!-- <h4><b>Aku</b></h4> -->
      <!-- <p>Seorang anak muda yang suka dengan tantangan, percodingan adalah duniaku. Hobiku yang gak pernah 
        kelewatan itu main gitar sambil bernyanyi yakk... </p> -->
   <!--  </div>
  </div> --><!-- <hr> -->

  <!-- Posts -->
  <!-- <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <!-- <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px"> -->
        <!-- <span class="w3-large">Lorem</span><br>
        <span>Sed mattis nunc</span>
      </li> -->
      <!-- <li class="w3-padding-16">
        <img src="/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span> -->
      <!-- </li> 
      <li class="w3-padding-16">
        <img src="/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
      </li>    -->
      <!-- <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li>  
    </ul> -->
  <!-- </div> -->
  <!-- <hr> -->  
 
  <!-- Labels / tags -->
  <!-- <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div> -->
  
<!-- END Introduction Menu -->
<!-- </div> -->

<!-- END GRID -->
<!-- </div><br> -->

<!-- END w3-content -->
<!-- </div> -->
<br><br><br><br>
<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <a href="admin.php" class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Kembali</a>
  <a href="give_thanks.php" class="w3-button w3-black w3-padding-large w3-margin-bottom">Berikutnya</a>
  <!-- <p>Powered by --> <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"><!-- w3.css --></a><!-- </p> -->
</footer>
<br>
    <br>
        <br>
            <br>
                <br>
                    <br>
                        <br>
                            <b><p>Powered by : @W3schools.com</p></b>

</body>
</html>
