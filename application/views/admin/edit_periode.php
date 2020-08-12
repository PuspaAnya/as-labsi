<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>
    <div class="card shadow mb-4 col-lg-6 mx-auto">
        <div class="card-header py-3 mx-auto">
            <h5 class="m-0 font-weight-bold">Form Edit Periode</h5>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/edit_periode'); ?>" method="POST">
                <div class="form-group">
                    <label for="tahun_periode">Tahun Periode</label>
                    <input type="text" class="form-control" id="tahun_periode" name="tahun_periode" value="<?= $d_periode['tahun_periode'] ?>">
                    <?= form_error('tahun_periode', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>

                <div class="row justify-content-start mt-4">
                    <div class="mt-2">
                        <a href="<?= base_url('admin') ?>" class="btn"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="mt-2 ml-3">
                        <button type="submit" name="tambah" class="btn btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->