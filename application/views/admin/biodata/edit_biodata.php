<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h1 class="h3 my-3 text-gray-800"></h1>
    </div>

    <div class="card shadow mb-4 col-lg-10 mx-auto">
        <div class="card-header py-3 mx-auto">
            <h4 class="m-0 font-weight-bold"><?= $title; ?></h4>
        </div>

        <div class="card-body p-4 m-2">
            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <?= form_open_multipart('admin/editBiodata') ?>

                    <div class="form-group row">
                        <label for="npm" class="col-sm-4 col-form-label">NPM</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" name="npm" id="npm" value="<?= $user['npm'] ?>" readonly>
                            <?= form_error('npm', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" id="name" value="<?= $user['name'] ?>">
                            <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control-plaintext" name="email" id="email" value="<?= $user['email'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-4 col-form-label">No. Hp / Whatsapp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $user['no_hp'] ?>">
                            <?= form_error('no_hp', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kelas" id="kelas" value="<?= $user['kelas'] ?>">
                            <?= form_error('kelas', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="loc_jaga" class="col-sm-4 col-form-label">Lokasi Jaga</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" name="loc_jaga" id="loc_jaga" value="<?= $user['loc_jaga'] ?>">
                                <?php foreach ($lokasi as $l) : ?>
                                    <?php if ($l == $user['loc_jaga']) : ?>
                                        <option value="<?= $l ?>" selected><?= $l ?></option>
                                    <?php else : ?>
                                        <option value="<?= $l ?>"><?= $l ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('loc_jaga', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $user['jabatan'] ?>">
                                <?php foreach ($jabatan as $j) : ?>
                                    <?php if ($j == $user['jabatan']) : ?>
                                        <option value="<?= $j ?>" selected><?= $j ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j ?>"><?= $j ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('jabatan', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-form-label col-sm-4">Status</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="status" id="status" value="<?= $user['status'] ?>">
                                <?php foreach ($status as $s) : ?>
                                    <?php if ($s == $user['status']) : ?>
                                        <option value="<?= $s ?>" selected><?= $s ?></option>
                                    <?php else : ?>
                                        <option value="<?= $s ?>"><?= $s ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('status', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-4">Picture</div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label for="image" class="custom-file-label">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-start">
                        <div class="col-sm-10 mt-5">
                            <a href="<?= base_url('admin/biodata_kerja') ?>" class="btn"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
                        </div>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->