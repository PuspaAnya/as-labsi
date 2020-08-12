<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>

    <div class="card shadow mb-4 col-lg-11 mx-auto">
        <div class="card-header py-3 mx-auto">
            <h4 class="m-0 font-weight-bold"><?= $title; ?></h4>
        </div>

        <?= $this->session->flashdata('message') ?>

        <div class="card-body">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <?php $index = 1;
                    foreach ($berkas->result() as $r) : ?>
                        <div class="card-header" id="<?= 'heading' . $index ?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="<?= '#collapse' . $index ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?= $r->pertanyaan; ?>
                                </button>
                            </h2>
                        </div>

                        <div id="<?= 'collapse' . $index ?>" class="collapse" aria-labelledby="<?= 'heading' . $index ?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <?= $r->jawaban; ?>
                            </div>
                        </div>
                    <?php $index++;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->