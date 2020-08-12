<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
        <!-- <h1 class="h3 my-3 text-gray-800"><?= $title; ?></h1> -->
    </div>


    <div class="card shadow mb-4 col-lg-6 ml-5 mx-auto">
        <div class="card-header py-3 mx-auto">
            <h4 class="m-0 font-weight-bold"><?= $title; ?></h4>
        </div>

        <div class="card-body p-4 m-2">

            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <?= $this->session->flashdata('message') ?>
                    <form action="<?= base_url('admin/ubah_Password') ?>" method="POST">
                        <div class="form-group row">
                            <label for="current_password" class="col-sm-4 col-form-label">Password Saat Ini</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="current_password" id="current_password">
                                <?= form_error('current_password', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="new_password1" class="col-sm-4 col-form-label">Password Baru</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="new_password1" id="new_password1">
                                <?= form_error('new_password1', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="new_password2" class="col-sm-4 col-form-label">Konfirmasi Password Baru</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="new_password2" id="new_password2">
                                <?= form_error('new_password2', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row justify-content-start">
                            <div class="col-sm-10 mt-4">
                                <a href="<?= base_url('admin/biodata_kerja') ?>" class="btn"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->