<?php
if ($_GET['menu'] == 'home') {
  include('konten/home.php');
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