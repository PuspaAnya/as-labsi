 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h4 class="my-5 text-center text-dark font-weight-bold">Biodata Asisten</h4>

     <div class="container">
         <div class="row">
             <div class="col-lg-6">
                 <?= $this->session->flashdata('message'); ?>
             </div>
         </div>
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb bg-transparent">
                 <li class="breadcrumb-item active" aria-current="page">Data Kerja</li>
                 <li class="breadcrumb-item"><a href="<?= base_url('user/biodata_pribadi') ?>">Data Pribadi</a></li>
             </ol>
         </nav>
         <div class="card mb-3 col-lg" style="max-width: 540px;">
             <div class="row no-gutters">
                 <div class="col-md-4 my-3">
                     <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img" alt="...">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                         <p>Data Kerja</p>
                         <h5 class="card-title"><?= $user['name'] ?></h5>
                         <p class="card-text"><?= $user['email'] ?></p>
                         <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']) ?></small></p>
                     </div>
                 </div>
             </div>
         </div>
         <a href="<?= base_url('user/editBiodataKerja') ?>" class="btn btn-primary"><i class="fas fa-fw fa-cog"></i>Ubah Data</a>
     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->