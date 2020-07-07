<div class="container">

    <div class="row mt-5">
        <div class="col-lg">

            <div class="card">
                <div class="card-header bg-gray-200 font-weight-bold">
                    Form Edit Data Kalender Akademik
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $kalender_akademik['id'] ?>">
                        <div class="form-group">
                            <label for="kegiatan">Kegiatan</label>
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="<?= $kalender_akademik['kegiatan'] ?>" placeholder="Kegiatan Praktikum">
                            <?= form_error('kegiatan', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?= $kalender_akademik['tanggal'] ?>" placeholder="(tanggal mulai) - (tanggal berakhir)(tahun)">
                            <?= form_error('tanggal', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="row float-right">
                            <div class="col-md-6 mt-2">
                                <a href="<?= base_url('admin') ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                            <div class="col-md-6 mt-2">
                                <button type="submit" name="tambah" class="btn btn-success">Ubah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

</div>