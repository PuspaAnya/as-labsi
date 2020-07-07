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

    <div class="card shadow mb-4 col-lg-11 mx-auto">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Jadwal Jaga Asisten LABSI</h5>
        </div>
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
                                <td><a href="<?php echo base_url('admin/download_jadwaljaga/'); ?><?php echo $row->kd_berkas; ?>" class="text-success"><i class="fas fa-fw fa-download"></i></a>
                                    <a> | </a>
                                    <a href="" class=""><i class="fas fa-fw fa-edit"></i></a>
                                    <a> | </a>
                                    <a href="" onclick="return confirm('Data akan terhapus, lanjutkan?')" class="text-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
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