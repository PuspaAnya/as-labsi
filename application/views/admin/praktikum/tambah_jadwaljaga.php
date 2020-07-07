<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>

    <?php
    if (isset($error)) {
        echo "ERROR UPLOAD : <br/>";
        print_r($error);
        echo "<hr/>";
    }
    ?>

    <div class="card shadow mb-4 col-lg-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Upload Jadwal Jaga Asisten LABSI</h6>
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="<?php echo base_url('admin/proses_jadwaljaga'); ?>" method="POST">
                <div class="form-group">
                    <label for="keterangan_berkas">Nama File</label>
                    <input type="text" class="form-control" id="keterangan_berkas" name="keterangan_berkas" placeholder="Nama File" value="<?= set_value('keterangan_berkas') ?>">
                    <?= form_error('keterangan_berkas', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="berkas">
                        <label for="file" class="custom-file-label">Pilih File</label>
                    </div>
                </div>

                <div class="row float-right">
                    <div class="col-md-6 mt-2">
                        <a href="<?= base_url('admin/jadwal_jaga') ?>" class="btn btn-secondary">Batal</a>
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