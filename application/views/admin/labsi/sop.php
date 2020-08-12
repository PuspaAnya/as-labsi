<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
        <!-- <h1 class="h3 mb-0 text-gray-800"></h1> -->
    </div>

    <div class="card shadow mb-4 col-lg-11 mx-auto">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold"><?= $title; ?></h5>
        </div>

        <?php if ($this->session->flashdata('message')) : ?>
            <div class="row mt-3">
                <div class="col-lg">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data jadwal jaga<strong> berhasil</strong> <?= $this->session->flashdata('message'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="card-body">
            <a href="<?= base_url('admin/upload_sop') ?>" class="btn btn-outline-primary mb-3"><i class="fas fa-fw fa-plus"></i> SOP</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="table1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="20px" scope="col">No</th>
                            <th scope="col">Nama File</th>
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
                                <td><?php echo $row->keterangan; ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/download_sop/'); ?><?php echo $row->id; ?>" class="text-success"><i class="fas fa-fw fa-download"></i></a>
                                    <a> | </a>
                                    <a href="<?= base_url('admin/hapus_sop/' . $row->id) ?>" onclick="return confirm('Data akan terhapus, lanjutkan?')" class="text-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
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