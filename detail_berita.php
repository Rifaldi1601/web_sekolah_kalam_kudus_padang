
<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="blog_left_sidebar">
        <?php
        $slug = $_GET ['slug'];
                 $no = 1;
                 $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC");
                 while ($data =  mysqli_fetch_array($query)) {

                 ?>
        <article class="blog_item">
            <div class="blog_item_img">
                <img class="card-img rounded-0" src="admin/uploads/<?php echo $data['gambar_berita'] ?>" alt="">
                <a href="#" class="blog_item_date">
                    <h3><?php echo date('d-m-Y', strtotime($data['tgl_berita'])) ?></h3>

                </a>
            </div>

            <div class="blog_details">
                <a class="d-inline-block" href="single-blog.html">
                    <h2><?php echo $data['judul_berita'] ?></h2>
                </a>
                <p><?php echo $data['isi_berita']  ?></p>
                <ul class="blog-info-link">
                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                </ul>
            </div>
        </article>
        <?php } ?>

        <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous">
                        <i class="ti-angle-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item active">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Next">
                        <i class="ti-angle-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>