<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>

    <div class="card shadow mb-4 col-lg-6 mx-auto">
        <div class="card-header py-3 mx-auto">
            <h5 class="m-0 font-weight-bold">Upload Jadwal Jaga Asisten LABSI</h5>
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="<?php echo base_url('admin/proses_jadwaljaga'); ?>" method="POST">
                <div class="form-group">
                    <!-- <label for="keterangan_berkas">Nama File</label> -->
                    <input type="text" class="form-control" id="keterangan_berkas" name="keterangan_berkas" placeholder="Nama File" value="<?= set_value('keterangan_berkas') ?>" required>
                    <?= form_error('keterangan_berkas', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file" name="berkas" required>
                        <label for="file" class="custom-file-label">Pilih File</label>
                    </div>
                </div>

                <div class="row float-left mt-3">
                    <div class="mt-2">
                        <a href="<?= base_url('admin/jadwal_jaga') ?>" class="btn"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class=" mt-2 ml-3">
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