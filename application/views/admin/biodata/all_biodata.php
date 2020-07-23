<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-3 mt-3 text-gray-800"></h5>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Data Asisten LABSI</h6>
        </div>

        <?= $this->session->flashdata('message') ?>

        <div class="card-body">
            <a href=<?= base_url('admin/tambah_asisten') ?> class="btn btn-primary mb-3">+ tambah asisten</a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="table1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="20px" scope="col">No</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama</th>
                            <!-- <th width="50px" scope="col">Email</th> -->
                            <!-- <th scope="col">No. Hp</th>
                            <th scope="col">Kelas</th> -->
                            <th scope="col">Lokasi Jaga</th>
                            <!-- <th scope="col">Jabatan</th> -->
                            <th scope="col">Status</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($all_user as $au) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $au['npm']; ?></td>
                                <td><?= $au['name']; ?></td>
                                <!-- <td><?= $au['email']; ?></td> -->
                                <!-- <td><?= $au['no_hp']; ?></td>
                                <td><?= $au['kelas']; ?></td> -->
                                <td><?= $au['loc_jaga']; ?></td>
                                <!-- <td><?= $au['jabatan']; ?></td> -->
                                <td><?= $au['status']; ?></td>
                                <td class="text-center"><img width="100 " src="<?php echo base_url(); ?>assets/img/profile/<?= $au['image']; ?>" /></td>
                                <td>
                                    <a href="<?= base_url() ?>admin/detail_biodata/<?= $au['id']; ?>" name="details"><i class="fas fa-fw fa-clipboard-list"></i></a>
                                    <a> | </a>
                                    <a href="<?= base_url() ?>admin/hapus_biodata/<?= $au['id']; ?>" name="delete" onclick="return confirm('Data akan terhapus, lanjutkan?')" class="text-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Nama</th>
                            <!-- <th width="50px" scope="col">Email</th> -->
                            <!-- <th scope="col">No. Hp</th>
                            <th scope="col">Kelas</th> -->
                            <th scope="col">Lokasi Jaga</th>
                            <!-- <th scope="col">Jabatan</th> -->
                            <th scope="col">Status</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->