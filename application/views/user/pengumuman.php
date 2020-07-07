<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>

    <div class="card shadow mb-4 col-lg-11 mx-auto">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold">Pengumuman Praktikum LABSI</h5>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- <th scope="col">No</th> -->
                            <th width="120" scope="col">Tanggal</th>
                            <th scope="col">Pengumuman</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($pengumuman_data as $pd) : ?>
                            <tr>
                                <td><?= $pd['tanggal']; ?></td>
                                <td><?= $pd['pengumuman']; ?></td>
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