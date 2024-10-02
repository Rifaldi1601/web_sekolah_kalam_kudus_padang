<?php
include "../koneksi.php";

// Mengambil data dari form
$id_berita = $_POST['id_berita']; // ID berita yang akan diupdate
$judul_berita = $_POST['judul_berita'];
$tgl_berita = $_POST['tgl_berita'];
$isi_berita = $_POST['isi_berita'];

// Menangani upload file foto
if ($_FILES['gambar_berita']['name'] == '') {
    $namafile = $_POST['foto_lama'];
} else {
    $namafile = $_FILES['gambar_berita']['name'];
    $namaSementara = $_FILES['gambar_berita']['tmp_name'];
    move_uploaded_file($namaSementara, '../uploads/' . $namafile);
}

$update = mysqli_query($koneksi, "UPDATE berita SET judul_berita='$judul_berita',
tgl_berita='$tgl_berita',isi_berita='$isi_berita', 
gambar_berita='$namafile' WHERE id_berita='$id_berita'");

// Menampilkan pesan berdasarkan hasil query
if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../?page=berita/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../?page=berita/index';
    </script>";
}
