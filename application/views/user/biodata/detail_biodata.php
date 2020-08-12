 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h4 class="my-5 text-center text-dark font-weight-bold"></h4>

     <div class="container">

         <div class="card shadow mb-4 col-lg-10 mx-auto">
             <div class="card-header py-3 mx-auto">
                 <h5 class="m-0 font-weight-bold"><?= $title; ?></h5>
             </div>
             <div class="card-body col-lg-12 mx-auto justify-content-center">

                 <div class="row no-gutters col-lg-12">
                     <div class="col-lg-3">
                         <div class="card-body">
                             <img src="<?= base_url('assets/img/profile/') . $d_biodata['image'] ?>" class="img-thumbnail">
                         </div>
                     </div>
                     <div class="col-lg-9">
                         <div class="card-body">
                             <form class="">
                                 <div class="form-group row">
                                     <div class="col-sm-4">NPM</div>
                                     <div class="col-sm-1">:</div>
                                     <div class="col-sm-5">
                                         <p class="card-text"><?= $d_biodata['npm'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-4">Nama Lengkap</div>
                                     <div class="col-sm-1">:</div>
                                     <div class="col-sm-5">
                                         <p class="card-text"><?= $d_biodata['name'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-4">Email</div>
                                     <div class="col-sm-1">:</div>
                                     <div class="col-sm-5">
                                         <p class="card-text"><?= $d_biodata['email'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-4">No Hp / Whatsapp</div>
                                     <div class="col-sm-1">:</div>
                                     <div class="col-sm-5">
                                         <p class="card-text"><?= $d_biodata['no_hp'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-4">Kelas</div>
                                     <div class="col-sm-1">:</div>
                                     <div class="col-sm-5">
                                         <p class="card-text"><?= $d_biodata['kelas'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-4">Lokasi Jaga</div>
                                     <div class="col-sm-1">:</div>
                                     <div class="col-sm-5">
                                         <p class="card-text"><?= $d_biodata['loc_jaga'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-4">Jabatan</div>
                                     <div class="col-sm-1">:</div>
                                     <div class="col-sm-5">
                                         <p class="card-text"><?= $d_biodata['jabatan'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-4">Status Asisten</div>
                                     <div class="col-sm-1">:</div>
                                     <div class="col-sm-5">
                                         <p class="card-text"><?= $d_biodata['status'] ?></p>
                                     </div>
                                 </div>



                             </form>
                         </div>
                     </div>

                     <div class="row justify-content-start ml-3">
                         <a href="<?= base_url('user/all_biodata') ?>" class="btn btn-outline-secondary m-2"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->