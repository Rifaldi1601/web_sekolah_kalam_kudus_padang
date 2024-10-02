<?php
include "../koneksi.php";

// Mengambil data dari form
$judul_kegiatan = $_POST['judul_kegiatan'];
$tgl_kegiatan = $_POST['tgl_kegiatan'];
$isi_kegiatan = $_POST['isi_kegiatan'];
$slug = str_replace('+', '-', urlencode($judul_kegiatan));



$namafile = $_FILES['gambar_kegiatan']['name'];
$namaSementara = $_FILES['gambar_kegiatan']['tmp_name'];
move_uploaded_file($namaSementara, '../uploads/' . $namafile);


$tambah = mysqli_query($koneksi, "INSERT INTO kegiatan 
(judul_kegiatan, tgl_kegiatan, isi_kegiatan, gambar_kegiatan,slug) 
VALUES ( '$judul_kegiatan', '$tgl_kegiatan', '$isi_kegiatan', '$namafile', '$slug')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambah');
    window.location.href='../?page=kegiatan/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Ditambah');
    window.location.href='../?page=kegiatan/index';
    </script>";
}
