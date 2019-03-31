<!DOCTYPE html>
<html lang="en">
<?php
include("konten/header.html");
?>
<body>
  
  <div class="container">
    <?php
    include("konten/judul.html"); ?>  

    <!-- menu & konten -->
    <div class="row">
      <?php
      // menu
      include("konten/menu.html");

      // konten
      include('atur-konten.php'); ?>
    </div>
  </div>

</body>
</html>