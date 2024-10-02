 <!-- Container Fluid-->
 <div class="container" id="container-wrapper">


     <!-- Row -->
     <div class="row">
         <!-- Datatables -->
         <div class="col-lg-12">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <a href="?page=kegiatan/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                 </div>
                 <div class="table-responsive p-3">

                     <table class="table align-items-center table-flush" id="dataTable">
                         <thead class="thead-light">
                             <tr>
                                 <th>No</th>
                                 <th>judul kegiatan</th>
                                 <th>tgl kegiatan</th>
                                 <th>isi kegiatan</th>
                                 <th>gambar kegiatan</th>
                                 <th>Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM kegiatan ORDER BY id_kegiatan DESC");
                                while ($data =  mysqli_fetch_array($query)) {

                                ?>
                                 <tr>

                                     <td><?php echo $no++ ?></td>
                                     <td> <?php echo $data['judul_kegiatan'] ?></td>
                                     <td> <?php echo date('d-m-Y', strtotime($data['tgl_kegiatan'])) ?></td>
                                     <td> <?php echo $data['isi_kegiatan'] ?></td>
                                     <td class="text-center"> <img width="100" src="uploads/<?php echo $data['gambar_kegiatan'] ?>" alt=""></td>


                                     <td>
                                         <a href="?page=kegiatan/ubah&id_kegiatan=<?php echo $data['id_kegiatan'] ?>
                                         " class="btn btn-success"> <i class="fa fa-edit"></i></a>

                                         <a href="kegiatan/hapus.php?id_kegiatan=<?php echo $data['id_kegiatan'] ?>"
                                             class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">
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