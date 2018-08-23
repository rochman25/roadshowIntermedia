<!DOCTYPE html>
<html>
    <head>
        <title>Data peserta</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.css">
    </head>
    <body>
        <?php
        include 'nav.php';
        ?>
        <div class="container">

            <div class="col-sm-8 col-md-8 col-lg-8 mx-auto" style="margin-top:10px;margin-bottom: 20px">
                <form action="<?php echo base_url(); ?>index.php/InputData/prosesEdit/<?= $siswa->idSiswa ?>" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <h5 class="modal-title" style="margin-left: 15px">Edit Data Siswa</h5>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" value="<?= $siswa->nama_siswa ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="<?= $siswa->email ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" required="required"><?= $siswa->alamat ?></textarea>
                            </div>
                            <div class="form-group">
                                <!--                                <div class="col-lg-12">-->
                                <div class="input-group mb-3">
                                    <!--                                        <div class="col-lg-12">-->
                                    <label for="formGroupExampleInput">Hobby</label>
                                    <!--                                        </div>-->
                                    <div class="col-lg-12"></div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="hobi[]" value="olahraga"
                                            <?php
                                            $hobi = explode(',', $siswa->hobby);
                                            if (in_array('olahraga', $hobi)) {
                                                ?>
                                                       checked="checked"
                                                   <?php } ?>
                                                   />
                                        </div>
                                    </div>
                                    <label class="form-control" style="max-width:200px;">hobi saya olahraga</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="hobi[]" value="tidur"
                                            <?php
                                            $hobi = explode(',', $siswa->hobby);
                                            if (in_array('tidur', $hobi)) {
                                                ?>
                                                       checked="checked"
                                                   <?php } ?>
                                                   />
                                        </div>
                                    </div>
                                    <label class="form-control" style="max-width:200px;">hobi saya tidur</label>
                                    <div class="col-lg-12"></div>
                                    <div class="col-lg-12"></div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="hobi[]" value="ngoding"
                                            <?php
                                            $hobi = explode(',', $siswa->hobby);
                                            if (in_array('ngoding', $hobi)) {
                                                ?>
                                                       checked="checked"
                                                   <?php } ?>
                                                   />
                                        </div>
                                    </div>
                                    <label class="form-control" style="max-width:200px;">hobi saya ngoding</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="hobi[]" value="design"
                                            <?php
                                            $hobi = explode(',', $siswa->hobby);
                                            if (in_array('design', $hobi)) {
                                                ?>
                                                       checked="checked"
                                                   <?php } ?>
                                                   />
                                        </div>
                                    </div>
                                    <label class="form-control" style="max-width:200px;">hobi saya design</label>
                                </div>
                                <!--                                </div>-->
                            </div>
                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input type="date" class="form-control" name="tgl" value="<?= $siswa->tgl_lahir ?>" required="required">
                            </div>


                            <div class="form-group">
                                <label for="formGroupExampleInput">Jenis Kelamin</label>
                                <br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="lk" name="jk" class="custom-control-input" value="laki-laki"
                                    <?php
                                    if ($siswa->jk == "laki-laki") {
                                        ?>
                                               checked="checked"
                                           <?php } ?> required="required">
                                    <label class="custom-control-label" for="lk">Laki-Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="pr" name="jk" class="custom-control-input" value="perempuan" 
                                    <?php
                                    if ($siswa->jk == "perempuan") {
                                        ?>
                                               checked="checked"
                                           <?php } ?>
                                           required="required">
                                    <label class="custom-control-label" for="pr">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="inputState">Jurusan</label>
                                <select class="form-control" name="jurusan">
                                    <option
                                    <?php
                                    if ($siswa->jurusan == "") {
                                        ?>
                                            selected
                                        <?php } ?>>Pilih</option>
                                    <option
                                    <?php
                                    if ($siswa->jurusan == "Teknik Komputer Dan Jaringan") {
                                        ?>
                                            selected
                                        <?php } ?>>Teknik Komputer Dan Jaringan</option>
                                    <option
                                    <?php
                                    if ($siswa->jurusan == "Rekayasa Perangkat Lunak") {
                                        ?>
                                            selected
                                        <?php } ?>>Rekayasa Perangkat Lunak</option>
                                    <option
                                    <?php
                                    if ($siswa->jurusan == "Multimedia") {
                                        ?>
                                            selected
                                        <?php } ?>
                                        >Multimedia</option>
                                    <option
                                    <?php
                                    if ($siswa->jurusan == "Teknik Kendaraan Ringan") {
                                        ?>
                                            selected
                                        <?php } ?>>Teknik Kendaraan Ringan</option>
                                    <option
                                    <?php
                                    if ($siswa->jurusan == "Teknik Sepeda Motor") {
                                        ?>
                                            selected
                                        <?php } ?>>Teknik Sepeda Motor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="berkas" name="foto" accept="image/*">
                                    <label class="custom-file-label" for="customFile"><?= $siswa->foto ?></label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
    <script>
        $('.custom-file-input').on('change', function () {
            let fileName = $(this).val().split('\\').pop();
            $(this).siblings('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
</html>
