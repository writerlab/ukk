<div class="col">
  <div class="card">
    <div class="card-header">
      Data Transaksi Peminjaman
      <a href="?menu=tambah-peminjaman" class="btn btn-info">Tambah</a>
    </div>
    <div class="card-body">
      <table class="table tabl-bordered">
        <thead>
          <tr>
            <th>NO.</th>
            <th>NAMA</th>
            <th>BARANG</th>
            <th>JUMLAH</th>
            <th>TGL.PINJAM</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $query = mysqli_query($konek, "
          select a.*, b.*, c.*, d.id_inventaris, d.nama from peminjaman a
          inner join pegawai b on a.id_pegawai=b.id_pegawai
          inner join detil_pinjam c on a.id_peminjaman=c.id_peminjaman
          inner join inventaris d on c.id_inventaris=d.id_inventaris
        ");
        $no = 0;
        while($row=mysqli_fetch_array($query)) {
          $no++;
        ?>
          <tr>
            <td><?php print $no?></td>
            <td><?php print $row['nama_pegawai']?></td>
            <td><?php print $row['nama']?></td>
            <td><?php print $row['jumlah']?></td>
            <td><?php print $row['tanggal_pinjam']?></td>
            <td>
              <a href="#">Ubah</a> - 
              <a href="#">Hapus</a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>