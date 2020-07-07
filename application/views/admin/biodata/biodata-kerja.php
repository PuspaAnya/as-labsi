 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h4 class="my-5 text-center text-dark font-weight-bold">Biodata Asisten</h4>

     <div class="container">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb bg-transparent">
                 <li class="breadcrumb-item active font-weight-bold" aria-current="page">Data Kerja</li>
                 <li class="breadcrumb-item"><a href="<?= base_url('admin/biodata_pribadi') ?>">Data Pribadi</a></li>
             </ol>
         </nav>
         <div class="card mb-3">
             <div class="row no-gutters">
                 <div class="col-md-3 p-4">
                     <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img" alt="..." style="max-width: 240px; max-height: 240px;">
                 </div>
                 <div class="col-md-9">
                     <div class="card-body">
                         <form>
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

                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <a href="#" class="btn btn-primary"><i class="fas fa-fw fa-cog"></i>Ubah Data</a>
     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->