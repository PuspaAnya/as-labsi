<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>

    <div class="card shadow mb-4 col-lg-6 mx-auto">
        <div class="card-header py-3 mx-auto">
            <h6 class="m-0 font-weight-bold"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="<?php echo base_url('admin/proses_sop'); ?>" method="POST">
                <div class="form-group">
                    <!-- <label for="keterangan">Nama File</label> -->
                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Nama File" value="<?= set_value('keterangan') ?>" required>
                    <?= form_error('keterangan', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="berkas">
                        <label for="file" class="custom-file-label" required>Pilih File</label>
                    </div>
                </div>

                <div class="row justify-content-start mt-4">
                    <div class="mt-2">
                        <a href="<?= base_url('admin/sop') ?>" class="btn"><i class="fas fa-fw fa-arrow-left"></i> Batal</a>
                    </div>
                    <div class="mt-2 ml-3">
                        <button type="submit" name="tambah" class="btn btn-success"> <i class="fas fa-fw fa-check"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->