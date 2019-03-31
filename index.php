<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('koneksi.php');
include("konten/header.html");
?>
<body>
  
  <div class="container">
    <?php
    if (empty($_SESSION['id'])) {
      include('konten/login.php');
    } else {
      include("konten/judul.html"); ?>  

      <!-- menu & konten -->
      <div class="row">
        <?php
        // menu
        include("konten/menu.html");

        // konten
        include('atur-konten.php');
    }
     ?>
    </div>
  </div>

</body>
</html>