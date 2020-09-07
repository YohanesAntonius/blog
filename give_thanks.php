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

<h2>Penghargaan</h2>    
    <div class="w3-row">
      <div class="w3-col 40 s20">
        <div class="w3-card-4 w3-margin w3-light-grey">
          <div class="w3-container">
            <br>
              <ceter><h3>
               <th>Ucapan Terima kasih</th>
               <th>Untuk Bapak Tantowi</th>
              </ceter></h3>
                <br>    
            </div>
        </div>
    </div>
</div>  
       <b><p>Powered by : @W3schools.com</p></b>      
</body>
</html>