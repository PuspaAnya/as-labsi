<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>

    <div class="card shadow mb-4 col-lg-11 mx-auto">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Jadwal Jaga Asisten LABSI</h5>
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
            <a href="<?= base_url('admin/upload_jadwaljaga') ?>" class="btn btn-success mb-3">+ tambah data</a>
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
                                <td><?php echo $row->keterangan_berkas; ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/download_jadwaljaga/'); ?><?php echo $row->kd_berkas; ?>" class="text-success"><i class="fas fa-fw fa-download"></i></a>
                                    <a> | </a>
                                    <a href="<?= base_url('admin/tambah_sop/') ?><?php echo $row->kd_berkas; ?>"><i class="fas fa-fw fa-edit"></i></a>
                                    <a> | </a>
                                    <a href="<?= base_url('admin/hapus_jadwal_jaga/' . $row->kd_berkas) ?>" onclick="return confirm('Data akan terhapus, lanjutkan?')" class="text-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="card">
                <?php $index = 1;
                foreach ($berkas->result() as $r) : ?>
                    <div class="card-header" id="<?= 'heading' . $index ?>">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="<?= '#collapse' . $index ?>" aria-expanded="true" aria-controls="collapseOne">
                                <?= $r->keterangan_berkas; ?>
                            </button>
                        </h2>
                    </div>

                    <div id="<?= 'collapse' . $index ?>" class="collapse" aria-labelledby="<?= 'heading' . $index ?>" data-parent="#accordionExample">
                        <div class="card-body">
                            <?= $r->keterangan_berkas; ?>
                            <br>
                            <a href="<?php echo base_url('admin/download_jadwaljaga/'); ?><?php echo $r->kd_berkas; ?>" class="text-primary">download file</a>
                        </div>
                    </div>
                <?php $index++;
                endforeach; ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->