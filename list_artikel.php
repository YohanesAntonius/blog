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

table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>

<body class="w3-light-grey">  

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="uas_cloud.php" class="w3-bar-item w3-button">Home</a>
  <a href="admin.php" class="w3-bar-item w3-button">Admin</a>
  <a href="edit_artikel.php" class="w3-bar-item w3-button">Edit</a>
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

<!-- <?php
$id = $_POST['Id'];
$tanggal = $_POST['Tanggal'];
$penulis = $_POST['Oleh'];
$isi = $_POST['Isi'];
 
// mysql_query("UPDATE list_artikel SET Tanggal='$tanggal', Oleh='$penulis', Isi='$isi' WHERE Id='$id'");
?> -->

<h2>List Artikel</h2>    
    <div class="w3-row">
      <div class="w3-col 40 s20">
        <div class="w3-card-4 w3-margin w3-light-grey">
          <div class="w3-container">
            <br>
                <table style="width:100%">
                  <tr>
                    <th>Tanggal</th>
                        <th>Penulis</th> 
                          <th>Judul</th>
                      </tr>
<?php
$sql = "SELECT * FROM list_artikel";
  
$query = mysqli_query($conn, $sql);

while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$siswa['Tanggal']."</td>";
            echo "<td>".$siswa['Penulis']."</td>";
            echo "<td>".$siswa['Judul']."</td>";
            echo "</tr>";
    }
?>
                    </table>
                <br>    
            </div>
        </div>
    </div>
</div>  
</body>
</html>