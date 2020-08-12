<!-- CAROUSEL -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/img/'); ?>slide_5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/'); ?>slide_4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/img/'); ?>slide_5.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- AKHIR CAROUSEL -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 text-center">
        <h1 class="h3 mt-3 text-gray-800 mx-auto">Kalender Akademik <br> Laboratorium Sistem Informasi <br>
            <?= $d_periode['tahun_periode']; ?>
        </h1>
    </div>

    <table class="table shadow table-hover table-bordered col-lg-10 mx-auto">
        <thead class="text-white" style="background-color: #A40000">
            <tr class="text-center">
                <th scope="col">Kegiatan</th>
                <th scope="col">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kalender_akademik as $ka) : ?>
                <tr>
                    <td><?= $ka['kegiatan']; ?></td>
                    <td class="text-center"><?= $ka['tanggal']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->