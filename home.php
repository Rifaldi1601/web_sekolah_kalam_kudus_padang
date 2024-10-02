<style>
    .team-item img {
        width: 100%;
        /* Membuat lebar gambar selalu mengikuti lebar kontainer */
        height: 250px;
        /* Menentukan tinggi tetap untuk semua gambar */
        object-fit: cover;
        /* Memotong gambar agar sesuai dengan ukuran kontainer tanpa mengubah proporsi */
    }
</style>

<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM about ORDER BY id_about DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
            <div class="col-xl-5 col-lg-5">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span>About Us</span>
                        <h3>Company Profile</h3>
                    </div>
                    <p style="text-align: justify;"><?php echo $data['tentang'] ?></p>
                    <a href="#" class="line-button">Learn More</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="about_thumb d-flex">
                    <div class="img_1">
                        <img src="admin/uploads/<?php echo $data['gambar_about'] ?>" alt="">
                    </div>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- about_area_end -->

<!-- offers_area_start -->
<div class="offers_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">

                    <h3>berita</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php

$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC");
while ($data =  mysqli_fetch_array($query))  {
?>

            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="admin/uploads/<?php echo $data['gambar_berita'] ?>" alt="">
                    </div>
                    <h3><?php echo $data['judul_berita'] ?> </h3>
                    <a href="detail-<?php echo $data['slug']?>" class="btn btn-primary rounded-pill "
                        style="margin-top: 7px;">details</a>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- offers_area_end -->