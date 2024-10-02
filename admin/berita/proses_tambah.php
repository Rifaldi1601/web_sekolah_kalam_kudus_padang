<?php
include "../koneksi.php";

// Mengambil data dari form
$judul_berita = $_POST['judul_berita'];
$tgl_berita = $_POST['tgl_berita'];
$isi_berita = $_POST['isi_berita'];
$slug = str_replace('+', '-', urlencode($judul_berita));



$namafile = $_FILES['gambar_berita']['name'];
$namaSementara = $_FILES['gambar_berita']['tmp_name'];
move_uploaded_file($namaSementara, '../uploads/' . $namafile);


$tambah = mysqli_query($koneksi, "INSERT INTO berita 
(judul_berita, tgl_berita, isi_berita, gambar_berita,slug) 
VALUES ( '$judul_berita', '$tgl_berita', '$isi_berita', '$namafile', '$slug')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambah');
    window.location.href='../?page=berita/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambah');
    window.location.href='../?page=berita/index';
    </script>";
}
