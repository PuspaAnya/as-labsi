<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>

    <div class="card shadow mb-4 col-lg-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= (isset($d_sop['judul'])) ?  $d_sop['judul'] : set_value('judul') ?>">
                    <?= form_error('judul', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="<?= (isset($d_sop['isi'])) ?  $d_sop['isi'] : set_value('isi') ?>">
                    <?= form_error('isi', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>

                <div class="row float-right">
                    <div class="col-md-6 mt-2">
                        <a href="<?= base_url('admin/sop') ?>" class="btn btn-secondary">Batal</a>
                    </div>
                    <div class="col-md-6 mt-2 pl-0">
                        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->