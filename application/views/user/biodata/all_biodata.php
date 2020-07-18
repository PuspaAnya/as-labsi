<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h5 class="h3 mb-3 mt-3 text-gray-800"><?= $title; ?></h5>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Data Asisten LABSI</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="table1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px" scope="col">No</th>
                            <th scope="col">NPM</th>
                            <th width="150px" scope="col">Nama</th>
                            <!-- <th width="50px" scope="col">Email</th> -->
                            <th scope="col">No. Hp</th>
                            <th scope="col">Kelas</th>
                            <th width="150px" scope="col">Lokasi Jaga</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Image</th>
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
                                <td><?= $au['no_hp']; ?></td>
                                <td><?= $au['kelas']; ?></td>
                                <td><?= $au['loc_jaga']; ?></td>
                                <td><?= $au['jabatan']; ?></td>
                                <td><?= $au['status']; ?></td>
                                <td class="text-center"><img width="100 " src="<?php echo base_url(); ?>assets/img/profile/<?= $au['image']; ?>" /></td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="10px" scope="col">No</th>
                            <th scope="col">NPM</th>
                            <th width="150px" scope="col">Nama</th>
                            <!-- <th width="50px" scope="col">Email</th> -->
                            <th scope="col">No. Hp</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Lokasi Jaga</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Image</th>
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