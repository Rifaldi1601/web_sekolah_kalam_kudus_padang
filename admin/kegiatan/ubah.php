<?php

// Mendapatkan id_kategori dari parameter URL
$id_kegiatan = $_GET['id_kegiatan'];

// Mengambil data kategori berdasarkan id_kategori
$ubah = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id_kegiatan = '$id_kegiatan'");
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
                    <form action="kegiatan/proses_ubah.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_kegiatan" value="<?php echo $data['id_kegiatan'] ?>">

                        <div class="form-group mb-3">
                            <label for="">Judul kegiatan</label>
                            <input type="text" name="judul_kegiatan" class="form-control" value="<?php echo $data['judul_kegiatan']; ?>">

                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tanggal kegiatan</label>
                            <input type="date" name="tgl_kegiatan" class="form-control" value="<?php echo $data['tgl_kegiatan'] ?>" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Isi kegiatan</label>
                            <textarea name="isi_kegiatan" class="form-control" ><?php echo $data['isi_kegiatan'] ?></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">gambar kegiatan</label>
                            <img width="100" src="uploads/<?php echo $data['gambar_kegiatan'] ?>" alt="">
                            <input type="hidden" name="gambar_kegiatan_lama" value="<?php echo $data['gambar_kegiatan'] ?>" id="">
                            <input type="file" name="gambar_kegiatan" class="form-control" value="<?php echo $data['gambar_kegiatan'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
<!---Container Fluid-->