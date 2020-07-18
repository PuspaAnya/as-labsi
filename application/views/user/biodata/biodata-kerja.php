<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h4 class="my-5 text-center text-dark font-weight-bold">Biodata Asisten</h4>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3 p-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                </div>
                <div class="col-md-9">
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
                            <div class="form-group row">
                                <div class="col-sm-3">Status Asisten</div>
                                <div class="col-sm-9">
                                    <p class="card-text">: <?= $user['status'] ?></p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?= base_url('user/editBiodata') ?>" class="btn btn-primary"><i class="fas fa-fw fa-cog"></i>Ubah Data</a>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->