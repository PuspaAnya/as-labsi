 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h4 class="my-5 text-center text-dark font-weight-bold">Biodata Asisten</h4>

     <div class="col-lg-12 container">

         <div class="card shadow mb-3">
             <div class="row no-gutters">
                 <div class="col-md-3 p-4">
                     <img src="<?= base_url('assets/img/profile/') . $d_biodata['image'] ?>" class="img-thumbnail">
                 </div>
                 <div class="col-md-9">
                     <div class="card-body">
                         <form>
                             <div class="form-group row">
                                 <div class="col-sm-3">NPM</div>
                                 <div class="col-sm-9">
                                     <p class="card-text">: <?= $d_biodata['npm'] ?></p>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-3">Nama Lengkap</div>
                                 <div class="col-sm-9">
                                     <p class="card-text">: <?= $d_biodata['name'] ?></p>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-3">Email</div>
                                 <div class="col-sm-9">
                                     <p class="card-text">: <?= $d_biodata['email'] ?></p>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-3">No Hp / Whatsapp</div>
                                 <div class="col-sm-9">
                                     <p class="card-text">: <?= $d_biodata['no_hp'] ?></p>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-3">Kelas</div>
                                 <div class="col-sm-9">
                                     <p class="card-text">: <?= $d_biodata['kelas'] ?></p>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-3">Lokasi Jaga</div>
                                 <div class="col-sm-9">
                                     <p class="card-text">: <?= $d_biodata['loc_jaga'] ?></p>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-3">Jabatan</div>
                                 <div class="col-sm-9">
                                     <p class="card-text">: <?= $d_biodata['jabatan'] ?></p>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-sm-3">Status Asisten</div>
                                 <div class="col-sm-9">
                                     <p class="card-text">: <?= $d_biodata['status'] ?></p>
                                 </div>
                             </div>

                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <a href="<?= base_url('admin/all_biodata') ?>" class="btn btn-primary"><i class="fas fa-fw fa-back"></i>Kembali</a>
     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->