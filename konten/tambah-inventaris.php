<?php
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $kondisi = $_POST['kondisi'];
  $keterangan = $_POST['keterangan'];
  $jumlah = $_POST['jumlah'];
  $id_jenis = $_POST['id_jenis'];
  $id_ruang = $_POST['id_ruang'];
  $kode = $_POST['kode'];
  $id_petugas = $_SESSION['id'];
  

  $query = mysqli_query($konek, "insert into inventaris values (
    NULL,
    '$nama',
    '$kondisi',
    '$keterangan',
    '$jumlah',
    '$id_jenis',
    NOW(),
    '$id_ruang',
    '$kode',
    '$id_petugas'
  )");
  // print "insert into inventaris values (
  //   NULL,
  //   '$nama',
  //   '$kondisi',
  //   '$keterangan',
  //   '$jumlah',
  //   '$id_jenis',
  //   NOW(),
  //   '$id_ruang',
  //   '$kode',
  //   '$id_petugas'
  // )";

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
      Tambah Inventaris
      <a href="?menu=inventaris" class="btn btn-danger">Kembali</a>
    </div>
    <div class="card-body">
      <?php print $pesan ?>
      <form action="" method="post">
        <div class="form-group">
          <input type="text" name="nama" class="form-control" placeholder="nama barang" required>
        </div>
        <div class="form-group">
          <select name="kondisi" class="form-control">
            <option value=""># PILIH KONDISI #</option>
            <option value="baru">Baru</option>
            <option value="bekas">Bekas</option>
          </select>
        </div>
        <div class="form-group">
          <textarea name="keterangan" class="form-control" cols="30" rows="10" placeholder="keterangan..." required></textarea>
        </div>
        <div class="form-group">
          <input type="number" name="jumlah" class="form-control" placeholder="jumlah barang" required>
        </div>
        <div class="form-group">
          <select name="id_jenis" class="form-control">
            <option value=""># PILIH JENIS BARANG #</option>
            <?php
            $query = mysqli_query($konek, "select * from jenis");
            while($row = mysqli_fetch_array($query)) { ?>
              <option value="<?php print $row['id_jenis']?>"><?php print $row['nama_jenis']?></option>
            <?php } ?>
          </select>
        </div>
        <!-- <div class="form-group">
          <input type="date" name="tgl_register" class="form-control" placeholder="Tangal Register" required>
        </div> -->
        <div class="form-group">
          <select name="id_ruang" class="form-control">
            <option value=""># PILIH RUANGAN #</option>
            <?php
            $query = mysqli_query($konek, "select * from ruang");
            while($row = mysqli_fetch_array($query)) { ?>
              <option value="<?php print $row['id_ruang']?>"><?php print $row['nama_ruang']?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="kode" class="form-control" placeholder="kode inventaris" required>
        </div>
        <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
      </form>
    </div>
  </div>
</div>