<?php

include "../koneksi.php";
$nama_facebook = $_POST['facebook'];
$nama_instagram = $_POST['instagram'];
$nama_notelp = $_POST['no_telp'];
$nama_alamat = $_POST['alamat'];

// Memperbaiki query dengan menambahkan kurung tutup yang hilang
$tambah = mysqli_query($koneksi, "INSERT INTO kontak (facebook, instagram, no_telp, alamat) VALUES ('$nama_facebook', '$nama_instagram','$nama_notelp', '$nama_alamat')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    window.location.href='../?page=kontak';
    </script>";
} else {
    // Menampilkan pesan error jika query gagal
    echo "<script>
    alert('Data Gagal Ditambahkan ');
    window.location.href='../?page=tambah-kontak';
    </script>";
}
