<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
        <!-- <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1> -->
    </div>

    <div class="card shadow mb-4 col-lg-6 mx-auto">
        <div class="card-header py-3 mx-auto">
            <h6 class="m-0 font-weight-bold"><?= $title; ?></h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="pertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="<?= (isset($d_faq['pertanyaan'])) ?  $d_faq['pertanyaan'] : set_value('pertanyaan') ?>">
                    <?= form_error('pertanyaan', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jawaban">Jawaban</label>
                    <input type="text" class="form-control" id="jawaban" name="jawaban" value="<?= (isset($d_faq['jawaban'])) ?  $d_faq['jawaban'] : set_value('jawaban') ?>">
                    <?= form_error('jawaban', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>

                <div class="row justify-content-start mt-4 ml-1">
                    <div class="mt-2">
                        <a href="<?= base_url('admin/faq') ?>" class="btn"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="mt-2 ml-3">
                        <button type="submit" name="tambah" class="btn btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->