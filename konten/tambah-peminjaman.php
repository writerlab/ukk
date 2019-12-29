<?php
if (isset($_POST['simpan'])) {
  $id_pegawai = $_POST['id_pegawai'];
  $id_inventaris = $_POST['id_inventaris'];
  $jumlah = $_POST['jumlah'];

  $q_peminjaman = mysqli_query($konek, "insert into peminjaman values (
    NULL,
    NOW(),
    NULL,
    'sedang pinjam',
    $id_pegawai
  )");

  $q_get_id = mysqli_query($konek, "select id_peminjaman from peminjaman order by id_peminjaman desc limit 1");
  $r = mysqli_fetch_array($q_get_id);
  $id_peminjaman = $r['id_peminjaman'];

  $q_detil_pinjam = mysqli_query($konek, "insert into detil_pinjam values (
    NULL,
    $id_inventaris,
    $jumlah,
    $id_peminjaman
  )");
  
  if ($q_peminjaman && $q_detil_pinjam) {
    $pesan = "<div class='alert alert-success'>Data berhasil ditambahkan.</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Data gagal disimpan.</div>";
  }
}
?>

<div class="col">
  <div class="card">
    <div class="card-header">
      Tambah Transaksi Peminjaman
      <a href="?menu=peminjaman" class="btn btn-danger">Kembali</a>
    </div>
    <div class="card-body">
      <?php print $pesan ?>
      <form action="" method="post">
        <div class="form-group">
          <select name="id_pegawai" class="form-control">
            <option value=""># PILIH PEMINJAM #</option>
            <?php
            $query = mysqli_query($konek, "select * from pegawai");
            while($row = mysqli_fetch_array($query)) { ?>
              <option value="<?php print $row['id_pegawai']?>"><?php print $row['nama_pegawai']?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <select name="id_inventaris" class="form-control">
            <option value=""># PILIH BARANG #</option>
            <?php
            $query = mysqli_query($konek, "select * from inventaris");
            while($row = mysqli_fetch_array($query)) { ?>
              <option value="<?php print $row['id_inventaris']?>"><?php print $row['nama']?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <input type="number" name="jumlah" class="form-control" placeholder="jumlah barang" required>
        </div>
        <button type="submit" class="btn btn-info" name="simpan">Simpan</button>
      </form>
    </div>
  </div>
</div>