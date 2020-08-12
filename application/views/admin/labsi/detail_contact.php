<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>

    <div class="card shadow col-lg-8 mx-auto mt-4 mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Detail Pesan</h5>
        </div>
        <div class="row no-gutters justify-content-start">
            <div class="col-lg-10">
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <div class="col-sm-3">Nama Pengirim</div>
                            <div class="col-sm-9">
                                <p class="card-text"> <?= $d_contact['nama'] ?></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">Email</div>
                            <div class="col-sm-9">
                                <p class="card-text"> <?= $d_contact['email'] ?></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">Pesan</div>
                            <div class="col-sm-9">
                                <div class="card">
                                    <div class="card-body">
                                        <?= $d_contact['pesan'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <a href="<?= base_url('admin/contact') ?>" class="btn btn-outline-secondary"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
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