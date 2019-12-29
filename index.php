<?php session_start(); ?>
<!-- 
  UKK (Uji Kompetensi Keahlian)
  
  Zul Hilmi
  https://github.com/writerlab/ukk
-->
<!DOCTYPE html>
<html lang="en">
<?php
include('koneksi.php');
include("konten/header.html");
?>
<body>
  
  <?php
  if (empty($_SESSION['id'])) {
      include('konten/login.php');
  } else { ?>
  <section class="wrap">
    <div class="container">
      <?php
      include("konten/judul.html"); ?>  

      <!-- menu & konten -->
      <div class="row">
        <?php
        // menu
        include("konten/menu.php");

        // konten
        include('atur-konten.php');?>
      </div>
    </div>
  </section>
  <?php } ?>

</body>
</html>
