<?php

include "../koneksi.php";

// Mendapatkan id_tim dari parameter URL
$id_kegiatan = $_GET['id_kegiatan'];

// Membuat query untuk menghapus data berdasarkan id_tim
$hapus = mysqli_query($koneksi, "DELETE FROM kegiatan WHERE id_kegiatan = '$id_kegiatan'");


if ($hapus) {
    echo "<script>
    alert('Data Berhasil Dihapus');
    window.location.href='../?page_kegiatan/index';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus');
    window.location.href='../?page_kegiatan/index';
    </script>";
}
