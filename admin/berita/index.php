 <!-- Container Fluid-->
 <div class="container" id="container-wrapper">


     <!-- Row -->
     <div class="row">
         <!-- Datatables -->
         <div class="col-lg-12">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <a href="?page=berita/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                 </div>
                 <div class="table-responsive p-3">

                     <table class="table align-items-center table-flush" id="dataTable">
                         <thead class="thead-light">
                             <tr>
                                 <th>No</th>
                                 <th>Judul berita</th>
                                 <th>Tanggal berita</th>
                                 <th>Isi berita</th>
                                 <th>Gambar wisata</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php

                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC");
                                while ($data =  mysqli_fetch_array($query))  {
                                ?>
                                 <tr>

                                     <td><?php echo $no++ ?></td>
                                    <td> <?php echo $data['judul_berita'] ?></td>
                                     <td> <?php echo date('d-m-Y', strtotime($data['tgl_berita'])) ?></td>
                                     <td> <?php echo substr($data['isi_berita'], 0, 50)  ?></td>
                                     <td class="text-center"> <img width="100" src="uploads/<?php echo $data['gambar_berita'] ?>" alt=""></td>

                                     <td>

                                         <a href="?page=berita/ubah&id_berita=<?php echo $data['id_berita'] ?>
                                         " class="btn btn-success"> <i class="fa fa-edit"></i></a>

                                         <a href="berita/hapus.php?id_berita=<?php echo $data['id_berita'] ?>"
                                             class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                             <i class="fa fa-trash"></i></a>
                                     </td>

                                 </tr>
                             <?php } ?>

                         </tbody>

                     </table>
                 </div>
             </div>
         </div>

     </div>
     <!--Row-->


 </div>
 <!---Container Fluid-->