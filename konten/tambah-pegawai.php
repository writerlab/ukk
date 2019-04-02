<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $nip = $_POST['nip'];
  $alamat = $_POST['alamat'];

  $query = mysqli_query($konek, "insert into pegawai values (
    NULL,
    '$nama',
    '$nip',
    '$alamat'
  )");

  if ($query) {
    $pesan = "<div class='alert alert-success'>Data berhasil ditambahkan.</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Data gagal disimpan.</div>";
  }
}
?>

<div class="col">
  <div class="card">
    <div class="card-header">
      Tambah Data Pegawai
      <a href="?menu=pegawai" class="btn btn-danger">Kembali</a>
    </div>
    <div class="card-body">
      <?php print $pesan ?>
      <form action="" method="post">
        <div class="form-group">
          <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP pegawai" required>
        </div>
        <div class="form-group">
          <input type="text" name="nama" class="form-control" placeholder="Nama" required>
        </div>
        <div class="form-group">
          <textarea name="alamat" class="form-control" cols="30" rows="10" placeholder="alamat lengkap..." required></textarea>
        </div>
        <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
      </form>
    </div>
  </div>
</div>