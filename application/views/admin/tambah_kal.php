<div class="container">

    <div class="row mt-5">
        <div class="col-lg">

            <div class="card shadow">
                <div class="card-header font-weight-bold">
                    Form Tambah Data Kalender Akademik
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="kegiatan">Kegiatan</label>
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Kegiatan Praktikum" value="<?= set_value('kegiatan') ?>">
                            <?= form_error('kegiatan', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="(tanggal mulai) - (tanggal berakhir)(tahun)" value="<?= set_value('tanggal') ?>">
                            <?= form_error('tanggal', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>

                        <div class="row float-right">
                            <div class="col-md-6 mt-2">
                                <a href="<?= base_url('admin') ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                            <div class="col-md-6 mt-2">
                                <button type="submit" name="tambah" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

</div>