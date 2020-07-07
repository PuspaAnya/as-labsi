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
                            <th width="20px" scope="col">No</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Email</th>
                            <th width="200px" scope="col">Image</th>
                            <th width="60px" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($all_user as $au) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $au['name']; ?></td>
                                <td><?= $au['email']; ?></td>
                                <td class="text-center"><img width="150 " src="<?php echo base_url(); ?>assets/img/profile/<?= $au['image']; ?>" /></td>
                                <td>
                                    <a href="" name="details"><i class="fas fa-fw fa-clipboard-list"></i></a>
                                    <a> | </a>
                                    <a href="" name="delete" class="text-danger"><i class="fas fa-fw fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Email</th>
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