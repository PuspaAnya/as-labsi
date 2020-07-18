<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 my-3 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-8">

            <?= form_open_multipart('admin/editBiodata') ?>

            <div class="form-group row">
                <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="npm" id="npm" value="<?= $user['npm'] ?>" readonly>
                    <?= form_error('npm', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" value="<?= $user['name'] ?>">
                    <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" value="<?= $user['email'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-2 col-form-label">No. Hp / Whatsapp</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $user['no_hp'] ?>">
                    <?= form_error('no_hp', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kelas" id="kelas" value="<?= $user['kelas'] ?>">
                    <?= form_error('kelas', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="loc_jaga" class="col-sm-2 col-form-label">Lokasi Jaga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="loc_jaga" id="loc_jaga" value="<?= $user['loc_jaga'] ?>">
                    <?= form_error('loc_jaga', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $user['jabatan'] ?>">
                    <?= form_error('jabatan', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status Asisten</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" id="status" value="<?= $user['status'] ?>">
                    <?= form_error('status', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label for="image" class="custom-file-label">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10 mt-5">
                    <a href="<?= base_url('admin/biodata_kerja') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>

            </form>

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->