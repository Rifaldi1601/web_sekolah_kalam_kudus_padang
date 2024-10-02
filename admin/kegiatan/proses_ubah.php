<?php
include "../koneksi.php";

// Mengambil data dari form
$id_kegiatan = $_POST['id_kegiatan']; // ID kegiatan yang akan diupdate
$judul_kegiatan = $_POST['judul_kegiatan'];
$tgl_kegiatan = $_POST['tgl_kegiatan'];
$isi_kegiatan = $_POST['isi_kegiatan'];

// Menangani upload file foto
if ($_FILES['gambar_kegiatan']['name'] == '') {
    $namafile = $_POST['gambar_kegiatan_lama'];
} else {
    $namafile = $_FILES['gambar_kegiatan']['name'];
    $namaSementara = $_FILES['gambar_kegiatan']['tmp_name'];
    move_uploaded_file($namaSementara, '../uploads/' . $namafile);
}

// Melakukan query update ke database
$update = mysqli_query($koneksi, "UPDATE kegiatan SET judul_kegiatan='$judul_kegiatan', tgl_kegiatan='$tgl_kegiatan', isi_kegiatan='$isi_kegiatan', gambar_kegiatan='$namafile' WHERE id_kegiatan='$id_kegiatan'");


// Menampilkan pesan berdasarkan hasil query
if ($update) {
    echo "<script>
    alert('Data Berhasil Diubah');
    window.location.href='../?page=kegiatan/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah');
    window.location.href='../?page=kegiatan/index';
    </script>";
}
