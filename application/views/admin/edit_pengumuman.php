<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Form Edit Pengumuman</h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $pengumuman_data['id'] ?>">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal Praktikum" value="<?= $pengumuman_data['tanggal'] ?>">
                    <?= form_error('tanggal', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="pengumuman">Pengumuman</label>
                    <textarea type="text" class="form-control" id="pengumuman" name="pengumuman"><?= $pengumuman_data['pengumuman'] ?></textarea>

                    <!-- <textarea id=" ckeditor" name="isi" style="height: 300px;"></textarea> -->

                    <?= form_error('pengumuman', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>

                <div class="row float-right">
                    <div class="col-md-6 mt-2">
                        <a href="<?= base_url('admin/pengumuman') ?>" class="btn btn-secondary">Kembali</a>
                    </div>
                    <div class="col-md-6 mt-2">
                        <button type="submit" name="tambah" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->