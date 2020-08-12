<!-- Begin Page Content -->
<div class="container-fluid">



    <div class="card shadow col-lg-11 mx-auto mt-4 mb-4">
        <div class="card-header py-3 mx-auto">
            <h5 class="m-0 font-weight-bold">Kontak LABSI</h5>
        </div>

        <?php if ($this->session->flashdata('message')) : ?>
            <div class="row mt-3">
                <div class="col-lg">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Pesan<strong> berhasil</strong> <?= $this->session->flashdata('message'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="card-body col-7">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                        <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea type="text" class="form-control" id="pesan" name="pesan" placeholder="Isi Pesan"></textarea>
                        <?= form_error('pesan', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>

                    <div class="row float-left">
                        <div class="col-md-6 mt-2">
                            <a href="<?= base_url('welcome/contact') ?>" class="btn">Batal</a>
                        </div>
                        <div class="col-md-6 mt-2">
                            <button type="submit" name="tambah" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card card-body col-5 mt-5 mb-10">

                <div class="card-header bg-none">
                    Detail Kontak
                </div>

                <div class="card-body">
                    <h5>Lokasi LABSI Universitas Gunadarma</h5>
                    <br>
                    <td>
                        <p style="text-align:left;">KAMPUS E DEPOK<br>
                            Jl. Komjen.Pol.M.Jasin No.9, Tugu, Kec. Cimanggis,
                            Kota Depok, Jawa Barat 16451
                        </p>
                    </td>
                    <td>
                        <p style="text-align:left;">KAMPUS H DEPOK<br>
                            Jl. Akses Kelapa Dua, Cimanggis, Pasir Gunung Selatan,
                            Kec. Cimanggis, Kota Depok, Jawa Barat 16451
                        </p>
                    </td>
                    <td>
                        <p style="text-align:left;">KAMPUS KARAWACI<br>
                            Jl. Danau Kelapa Dua Karawaci,
                            Karawaci, Tangerang
                        </p>
                    </td>
                    <td>
                        <p style="text-align:left;">KAMPUS L CENGKARENG<br>
                            Jl. Raya Kamal Outring Road No.75
                            Cengkareng, Tangerang
                            Banten, Indonesia
                        </p>
                    </td>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->