<?php

include "../koneksi.php";

// Mendapatkan id_kategori dari parameter URL
$id_berita = $_GET['id_berita'];

// Membuat query untuk menghapus data berdasarkan id_kategori
$hapus = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita = '$id_berita'");

if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href='../?page=berita/index';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href='../?page=berita/index';
    </script>";
}
