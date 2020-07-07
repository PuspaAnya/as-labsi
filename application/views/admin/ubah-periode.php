<div class="container">

    <div class="row mt-5">
        <div class="col-lg">

            <div class="card">
                <div class="card-header bg-gray-200 font-weight-bold">
                    Form Edit Periode
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $kalender_akademik['id'] ?>">
                        <div class="form-group">
                            <label for="tahun_periode">Tahun Periode</label>
                            <input type="text" class="form-control" id="tahun_periode" name="tahun_periode" value="<?= $periode['tahun_periode'] ?>" placeholder="Tahun Periode">
                            <?= form_error('tahun_periode', '<small class="text-danger">', '</small>'); ?>
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