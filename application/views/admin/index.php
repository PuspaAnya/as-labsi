<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between text-center mx-auto">
        <h3 class="mt-3 text-gray-800 mx-auto">Kalender Akademik <br> Laboratorium Sistem Informasi <br>
            <?= $d_periode['tahun_periode']; ?>
            <br>
            <a class="h5 mt-0" href="<?= base_url() ?>admin/edit_periode/<?= $d_periode['id']; ?>"><small>ubah periode</small></a>

        </h3>
    </div>

    <div class="container">

        <?php if ($this->session->flashdata('message')) : ?>
            <div class="row mt-3">
                <div class="col-lg">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data <strong> berhasil</strong> <?= $this->session->flashdata('message'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-6 mb-2">
                <a href="<?= base_url('admin/tambah_kal') ?>" class="btn btn-outline-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
            </div>
        </div>

        <table class="table shadow table-hover table-bordered mx-auto">

            <thead class="text-white text-center" style="background-color: #A40000">
                <tr>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kalender_akademik as $ka) : ?>
                    <tr>
                        <td><?= $ka['kegiatan']; ?></td>
                        <td class="text-center"><?= $ka['tanggal']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('admin/edit/') ?><?= $ka['id'] ?>" class="badge badge-secondary">edit</a>
                            <a href="<?= base_url('admin/hapus/') ?><?= $ka['id'] ?>" class="badge badge-danger" onclick="return confirm('Data akan terhapus, lanjutkan?')">delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>



        <!-- Button trigger modal
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formTambahData">
            <i class="fas fa-fw fa-plus"></i> Tambah Data
        </button> -->

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="formTambahData" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Kalender Akademik</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= base_url('admin/tambah') ?>" method="POST">
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

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>