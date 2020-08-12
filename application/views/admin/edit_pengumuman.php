<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>
    <div class="card shadow mb-4 mx-auto col-lg-10">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Form Edit Pengumuman</h5>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $pengumuman_data['id'] ?>">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="text" class="form-control col-sm-3" id="tanggal" name="tanggal" placeholder="tanggal Praktikum" value="<?= $pengumuman_data['tanggal'] ?>">
                    <?= form_error('tanggal', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="pengumuman">Pengumuman</label>
                    <textarea type="text" class="form-control" id="pengumuman" name="pengumuman"><?= $pengumuman_data['pengumuman'] ?></textarea>

                    <!-- <textarea id=" ckeditor" name="isi" style="height: 300px;"></textarea> -->

                    <?= form_error('pengumuman', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>

                <div class="row justify-content-start mt-4">
                    <div class="mt-2">
                        <a href="<?= base_url('admin/pengumuman') ?>" class="btn"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
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