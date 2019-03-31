<?php
if ($_GET['menu'] == 'home') {
  include('konten/home.php');
}
elseif (empty($_GET['menu'])) {
  include('konten/home.php');
}
elseif ($_GET['menu'] == 'keluar') {
  session_destroy();
  header('Location: index.php');
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



