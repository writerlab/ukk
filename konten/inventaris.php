<div class="col">
  <div class="card">
    <div class="card-header">
      Data Inventaris
      <a href="?menu=tambah-inventaris" class="btn btn-info">Tambah</a>
    </div>
    <div class="card-body">
      <table class="table tabl-bordered">
        <thead>
          <tr>
            <th>NO.</th>
            <th>NAMA</th>
            <th>KONDISI</th>
            <th>JUMLAH</th>
            <th>JENIS</th>
            <th>TGL.REG.</th>
            <th>RUANG</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $query = mysqli_query($konek, "
          select a.*, b.*, c.* from inventaris a
          inner join jenis b on a.id_jenis=b.id_jenis
          inner join ruang c on a.id_ruang=c.id_ruang
        ");
        $no = 0;
        while($row=mysqli_fetch_array($query)) {
          $no++;
        ?>
          <tr>
            <td><?php print $no?></td>
            <td><?php print $row['nama']?></td>
            <td><?php print $row['kondisi']?></td>
            <td><?php print $row['jumlah']?></td>
            <td><?php print $row['nama_jenis']?></td>
            <td><?php print $row['tanggal_register']?></td>
            <td><?php print $row['nama_ruang']?></td>
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