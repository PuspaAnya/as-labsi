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
            <form enctype="multipart/form-data" action="<?php echo base_url('admin/proses_jadwaljaga'); ?>" method="POST">
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="<?= set_value('pertanyaan') ?>">
                    <?= form_error('pertanyaan', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jawaban">Jawaban</label>
                    <input type="text" class="form-control" id="jawaban" name="jawaban" value="<?= set_value('jawaban') ?>">
                    <?= form_error('jawaban', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>

                <div class="row float-right">
                    <div class="col-md-6 mt-2">
                        <a href="<?= base_url('admin/faq') ?>" class="btn btn-secondary">Batal</a>
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