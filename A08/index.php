<?php include("assets/process.php"); ?>

<!DOCTYPE html>
<html>

<head>
  <?php include("assets/shared/header.php"); ?>

  <style>
    <?php include('assets/style.css'); ?>
  </style>

</head>

<body id="myPage">

  <?php include('assets/navbar.php'); ?>

  <!-- Image Header -->
  <div class="w3-display-container w3-animate-opacity">
    <?php include('assets/mainHeader.php'); ?>
  </div>

  <!-- Island of Personality -->
  <div class="w3-container w3-padding-64 w3-center w3-theme-custom" id="personality">
    <?php include('assets/personality.php'); ?>
  </div>

  <!-- Island Content-->
  <div>
    <?php include('assets/contents.php'); ?>
  </div>
  <!-- Footer -->
  <?php include('assets/shared/footer.php'); ?>
  </div>


  <script>
    // Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
  </script>

</body>

</html>