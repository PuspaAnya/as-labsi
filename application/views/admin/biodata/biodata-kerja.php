 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h4 class="my-5 text-center text-dark font-weight-bold"></h4>

     <div class="container">

         <div class="row">
             <div class="col-lg-10 mx-auto">
                 <?= $this->session->flashdata('message'); ?>
             </div>
         </div>

         <div class="card shadow mb-4 col-lg-10 mx-auto">
             <div class="card-header py-3 mx-auto">
                 <h5 class="m-0 font-weight-bold"><?= $title; ?></h5>
             </div>
             <div class="card-body mx-auto">
                 <div class="row">
                     <div class="col-lg-3">
                         <div class="card-body">
                             <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                         </div>
                     </div>
                     <div class="col-lg-9">
                         <div class="card-body">
                             <form>
                                 <div class="form-group row">
                                     <div class="col-sm-3">NPM</div>
                                     <div class="col-sm-9">
                                         <p class="card-text">: <?= $user['npm'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-3">Nama Lengkap</div>
                                     <div class="col-sm-9">
                                         <p class="card-text">: <?= $user['name'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-3">Email</div>
                                     <div class="col-sm-9">
                                         <p class="card-text">: <?= $user['email'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-3">No Hp / Whatsapp</div>
                                     <div class="col-sm-9">
                                         <p class="card-text">: <?= $user['no_hp'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-3">Kelas</div>
                                     <div class="col-sm-9">
                                         <p class="card-text">: <?= $user['kelas'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-3">Lokasi Jaga</div>
                                     <div class="col-sm-9">
                                         <p class="card-text">: <?= $user['loc_jaga'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-sm-3">Jabatan</div>
                                     <div class="col-sm-9">
                                         <p class="card-text">: <?= $user['jabatan'] ?></p>
                                     </div>
                                 </div>
                                 <div class="form-group row mb-4">
                                     <div class="col-sm-3">Status Asisten</div>
                                     <div class="col-sm-9">
                                         <p class="card-text">: <?= $user['status'] ?></p>
                                     </div>
                                 </div>

                                 <div class="row mt-3">
                                     <a href="<?= base_url('admin/editBiodata') ?>" class="btn btn-primary btn-sm m-2"><i class="fas fa-fw fa-cog"></i> Ubah Data</a>

                                     <a href="<?= base_url('admin/ubah_Password') ?>" class="btn btn-secondary btn-sm m-2"><i class="fas fa-fw fa-key"></i> Ubah Password</a>
                                 </div>


                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->