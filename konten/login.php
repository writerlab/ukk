<?php
if (isset($_POST['masuk'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($konek, "select * from petugas where username='$username'
                        and password=md5('$password')");
  $jumlah = mysqli_num_rows($query);
  if ($jumlah > 0) {
    $sesi = mysqli_fetch_assoc($query);

    $_SESSION['id'] = $sesi['id_petugas'];
    $_SESSION['username'] = $sesi['username'];
    $_SESSION['nama_petugas'] = $sesi['nama_petugas'];
    $_SESSION['id_level'] = $sesi['id_level'];

    header('Location: index.php?menu=home');
  } else {
    $pesan = "<div class='alert alert-danger'>LOGIN GAGAL!</div>";
  }
}
?>

<section class="login">
  <div class="container">
    <div class="row">
      <div class="col-4 offset-md-4">
        <h2 class="text-center pt-5 pb-5 text-white">
          APLIKASI INVENTARIS SARPRAS SMK.
        </h2>
        <div class="card">
          <div class="card-header">
            Masuk ke Aplikasi.
          </div>
          <div class="card-body">
            <?php print $pesan?>
            <form action="" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="username" autofocus required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="password" required>
              </div>
              <button type="submit" class="btn btn-info" name="masuk">Masuk</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>