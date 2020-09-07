<?php

  ob_start();
  session_start();

    $connect = new mysqli ("localhost","root","","cloudcom");
    
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
      <br>
        <br>
          <br>
            <br>
                   <!-- Contact Model -->
                <div class="w3-modal-content w3-animate-zoom">
                  <div class="w3-container w3-grey">
                      <!-- <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span> -->
                        <h1>Form Login</h1>
                          </div>
                       <div class="w3-container">
                    <!-- <p>Reserve a table, ask for today's special or just send us a message:</p> -->
                <form role="form" method="POST">
            <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nama" required name="Nama"></p>
        <!-- <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Masukkan Password" required name="Password"> </p> -->
    <!-- <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p> -->
      <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Masukkan Password" required name="Password"></p>
      <input type="submit" name="Masuk" value="Masuk" class="btn btn-primary ">
          </form>
            </div>
              </div>
              </div>

                <br>    
            </div>
        </div>
    </div>
</div>  
       <b><p>Powered by : @W3schools.com</p></b>
</body>
</html>



<?php

   if (isset($_POST['Masuk'])) {
      
      $Nama = $_POST['Nama'];
      $Password = $_POST['Password'];


      $sql=mysqli_query($connect,"SELECT * from tbl_user where nama='$Nama' and pass='$Password'");

      $data = mysqli_fetch_array($sql);

      $ketemu= $sql->num_rows;


      if ($ketemu>=1) {

        session_start();
        
        if ($data['level'] == "1") {
         
         $_SESSION['admin'] = $data['id'];

         header("location:list_artikel.php");

        }else if ($data['level'] == "2") {
         
         $_SESSION['TANTOWI'] = $data['id'];

         header("location:list_artikel.php");
        }
      }else{

        ?>

         <script type="text/javascript">
            <alert("Login Gagal !!! Nama dan Id Anda SALAH ... <Silahkan ULANGI lagi>")
          </script> 

<?php
      }

      
    } 

    

  ?>
