<div class="container">

    <div class="row mt-5">
        <div class="col-lg">

            <div class="card shadow mx-auto col-lg-10">
                <div class="card-header mx-auto">
                    <h5 class="font-weight-bold">Form Edit Data Kalender Akademik</h5>
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
                            <input type="text" class="form-control" id="_tanggal" name="tanggal" value="<?= $kalender_akademik['tanggal'] ?>" placeholder="(tanggal mulai) - (tanggal berakhir)(tahun)">
                            <?= form_error('tanggal', '<small class="text-danger">', '</small>'); ?>
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