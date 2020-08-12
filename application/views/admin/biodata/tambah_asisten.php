<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 my-3 text-gray-800"></h1>
    </div>

    <div class="card shadow mb-4 col-lg-6 ml-5 mx-auto">
        <div class="card-header py-3 mx-auto">
            <h5 class="m-0 font-weight-bold"><?= $title; ?></h5>
        </div>
        <div class="card-body p-4 m-2">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <form method="post" action="<?= base_url('admin/tambah_asisten') ?>">
                        <div class="form-group row">
                            <label for="npm" class="col-sm-4 col-form-label">NPM</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="npm" id="npm" value="<?= set_value('npm'); ?>">
                                <?= form_error('npm', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Konfirmasi Password">
                                <?= form_error('password2', '<small class="text-danger pl-1">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row justify-content-start">
                            <div class="col-sm-6 mt-5">
                                <a href="<?= base_url('admin/all_biodata') ?>" class="btn"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
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