<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $kode = $_POST['kode'];
  $keterangan = $_POST['keterangan'];

  $query = mysqli_query($konek, "insert into ruang values (
    NULL,
    '$nama',
    '$kode',
    '$keterangan'
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
      Tambah Data Ruangan
      <a href="?menu=ruangan" class="btn btn-danger">Kembali</a>
    </div>
    <div class="card-body">
      <?php print $pesan ?>
      <form action="" method="post">
        <div class="form-group">
          <input type="text" name="nama" class="form-control" placeholder="nama ruangan" required>
        </div>
        <div class="form-group">
          <input type="text" name="kode" class="form-control" placeholder="kode ruangan" required>
        </div>
        <div class="form-group">
          <textarea name="keterangan" class="form-control" cols="30" rows="10" placeholder="keterangan..." required></textarea>
        </div>
        <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
      </form>
    </div>
  </div>
</div>