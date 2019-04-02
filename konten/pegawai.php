<div class="col">
  <div class="card">
    <div class="card-header">
      Data Pegawai
      <a href="?menu=tambah-pegawai" class="btn btn-info">Tambah</a>
    </div>
    <div class="card-body">
      <table class="table tabl-bordered">
        <thead>
          <tr>
            <th>NO.</th>
            <th>NIP</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $query = mysqli_query($konek, "select * from pegawai");
        $no = 0;
        while($row=mysqli_fetch_array($query)) {
          $no++;
        ?>
          <tr>
            <td><?php print $no?></td>
            <td><?php print $row[2]?></td>
            <td><?php print $row[1]?></td>
            <td><?php print $row[3]?></td>
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