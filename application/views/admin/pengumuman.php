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

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Kelola Form Pengumuman Praktikum LABSI</h6>
        </div>
        <div class="card-body">

            <?php if ($this->session->flashdata('message')) : ?>
                <div class="row mt-3">
                    <div class="col-lg">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Pengumuman<strong> berhasil</strong> <?= $this->session->flashdata('message'); ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <a href="<?= base_url('admin/tambah_pengumuman') ?>" class="btn btn-success mb-3">+ tambah data</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- <th scope="col">No</th> -->
                            <th width="120" scope="col">Tanggal</th>
                            <th scope="col">Pengumuman</th>
                            <th width="80px" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($pengumuman_data as $pd) : ?>
                            <tr>
                                <td><?= $pd['tanggal']; ?></td>
                                <td><?= $pd['pengumuman']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/edit_pengumuman/') ?><?= $pd['id'] ?>"><i class="fas fa-fw fa-edit"></i></a>
                                    <a> | </a>
                                    <a href="<?= base_url('admin/hapus_pengumuman/') ?><?= $pd['id'] ?>" class="text-danger" onclick="return confirm('Data akan terhapus, lanjutkan?')"><i class="fas fa-fw fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->