<div class="container">

    <div class="row mt-5">
        <div class="col-lg">

            <div class="card shadow mx-auto col-lg-8">
                <div class="card-header mx-auto">
                    <h5 class="font-weight-bold">Form Tambah Data Kalender Akademik</h5>
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
                            <input type="text" class="form-control" id="_tanggal" name="tanggal" placeholder="(tanggal mulai) - (tanggal berakhir)(tahun)" value="<?= set_value('tanggal') ?>">
                            <?= form_error('tanggal', '<small class="text-danger pl-1">', '</small>'); ?>
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
    </div>

</div>

</div>