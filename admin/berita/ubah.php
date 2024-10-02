<?php

// Mendapatkan id_kategori dari parameter URL
$id_berita = $_GET['id_berita'];

// Mengambil data kategori berdasarkan id_kategori
$ubah = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '$id_berita'");
$data = mysqli_fetch_array($ubah);
?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                    <form action="berita/proses_ubah.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id_berita" value="<?php echo $data['id_berita'] ?>">
                        <div class="form-group mb-3">
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Judul berita</label>
                            <input type="text" name="judul_berita" class="form-control" value="<?php echo $data['judul_berita']; ?>">

                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tanggal berita</label>
                            <input type="date" name="tgl_berita" class="form-control" value="<?php echo $data['tgl_berita'] ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Isi berita</label>
                            <textarea name="isi_berita" class="form-control" required><?php echo $data['isi_berita'] ?></textarea>
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Gambar berita</label>
                            <img width="100" src="../uploads/<?php echo $data['gambar_berita'] ?>" alt="">
                            <input type="hidden" name="foto_lama" value="<?php echo $data['gambar_berita'] ?>">
                            <input type="file" name="gambar_berita" class="form-control"
                                value="<?php echo $data['gambar_berita'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
<!---Container Fluid-->