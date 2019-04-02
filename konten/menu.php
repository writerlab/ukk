<div class="col-3">
  <div class="card">
    <div class="card-header">
      MENU
    </div>
    <div class="card-body">
      <ul>
      <?php
      if ($_SESSION['id_level'] == 1) { ?>
        <li>Inventarisir</li>
        <ul>
          <li><a href="?menu=jenis-barang">Jenis Barang</a></li>
          <li><a href="?menu=ruangan">Ruangan</a></li>
          <li><a href="?menu=inventaris">Inventaris</a></li>
        </ul>
        <li><a href="?menu=pegawai">Pegawai</a></li>
      <?php } ?>

      <?php
      if ($_SESSION['id_level'] == 1 || $_SESSION['id_level'] == 2) { ?>
        <li>Transaksi</li>
        <ul>
          <li><a href="?menu=peminjaman">Peminjaman</a></li>
          <li><a href="?menu=pengembalian">Pengembalian</a></li>
        </ul>
      <?php } ?>

      <?php
      if ($_SESSION['id_level'] == 1) { ?>
        <li><a href="?menu=laporan">Laporan</a></li>
      <?php } ?>
        <li><a href="?menu=keluar">Keluar</a></li>
      </ul>
    </div>
  </div>
</div> <!-- ./col-3 -->