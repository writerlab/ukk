<?php
if ($_GET['menu'] == 'home') {
  include('konten/home.php');
}
elseif (empty($_GET['menu'])) {
  include('konten/home.php');
}
elseif ($_GET['menu'] == 'keluar') {
  session_destroy();
  print "<meta http-equiv='refresh' content='0;URL=index.php'> ";
}
elseif ($_GET['menu'] == 'jenis-barang') {
  include('konten/jenis-barang.php');
}
elseif ($_GET['menu'] == 'tambah-jenis-barang') {
  include('konten/tambah-jenis-barang.php');
}
elseif ($_GET['menu'] == 'ruangan') {
  include('konten/ruangan.php');
}
elseif ($_GET['menu'] == 'tambah-ruangan') {
  include('konten/tambah-ruangan.php');
}
elseif ($_GET['menu'] == 'inventaris') {
  include('konten/inventaris.php');
}
elseif ($_GET['menu'] == 'tambah-inventaris') {
  include('konten/tambah-inventaris.php');
}

elseif ($_GET['menu'] == 'tambah-pegawai') {
  include('konten/tambah-pegawai.php');
}
elseif ($_GET['menu'] == 'pegawai') {
  include('konten/pegawai.php');
}

elseif ($_GET['menu'] == 'tambah-peminjaman') {
  include('konten/tambah-peminjaman.php');
}
elseif ($_GET['menu'] == 'peminjaman') {
  include('konten/peminjaman.php');
}



