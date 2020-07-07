<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>

    <?php if ($this->session->flashdata('message')) : ?>
        <div class="row mt-3">
            <div class="col-lg">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Pesan<strong> berhasil</strong> <?= $this->session->flashdata('message'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4 col-lg-11 mx-auto">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Daftar Email LABSI</h5>
        </div>
        <div class="card-body">
            <a href="<?= base_url('admin/upload_jadwaljaga') ?>" class="btn btn-primary mb-3"><i class="fas fa-fw fa-edit"></i> Edit Detail Kontak</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="table1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="20px" scope="col">No</th>
                            <th scope="col">Nama Pengirim</th>
                            <th scope="col">Email</th>
                            <th width="300px" scope="col">Pesan</th>
                            <th width="100px" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        foreach ($berkas->result() as $row) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->pesan; ?></td>
                                <td>
                                    <a href="" onclick="return confirm('Data akan terhapus, lanjutkan?')" class="text-primary"><i class="fas fa-fw fa-book-open"></i></a>
                                    <a> | </a>
                                    <a href="" class="text-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->