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
                <form action="<?php echo base_url(); ?>index.php/InputData/input" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <h5 class="modal-title" style="margin-left: 15px">Input Data Siswa</h5>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required="required">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required="required">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" required="required"></textarea>
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
                                            <input type="checkbox" name="hobi[]" value="olahraga">
                                        </div>
                                    </div>
                                    <label class="form-control" style="max-width:200px;">hobi saya olahraga</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="hobi[]" value="tidur">
                                        </div>
                                    </div>
                                    <label class="form-control" style="max-width:200px;">hobi saya tidur</label>
                                    <div class="col-lg-12"></div>
                                    <div class="col-lg-12"></div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="hobi[]" value="ngoding">
                                        </div>
                                    </div>
                                    <label class="form-control" style="max-width:200px;">hobi saya ngoding</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="hobi[]" value="design">
                                        </div>
                                    </div>
                                    <label class="form-control" style="max-width:200px;">hobi saya design</label>
                                </div>
                                <!--                                </div>-->
                            </div>
                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input type="date" class="form-control" name="tgl" required="required">
                            </div>


                            <div class="form-group">
                                <label for="formGroupExampleInput">Jenis Kelamin</label>
                                <br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="lk" name="jk" class="custom-control-input" value="laki-laki" required="required">
                                    <label class="custom-control-label" for="lk">Laki-Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="pr" name="jk" class="custom-control-input" value="perempuan" required="required">
                                    <label class="custom-control-label" for="pr">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="inputState">Jurusan</label>
                                <select class="form-control" name="jurusan">
                                    <option selected>Pilih</option>
                                    <option>Teknik Komputer Dan Jaringan</option>
                                    <option>Rekayasa Perangkat Lunak</option>
                                    <option>Multimedia</option>
                                    <option>Teknik Kendaraan Ringan</option>
                                    <option>Teknik Sepeda Motor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="berkas" name="foto" accept="image/*">
                                    <label class="custom-file-label" for="customFile">Pilih Foto</label>
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
