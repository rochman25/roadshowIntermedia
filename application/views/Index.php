<!DOCTYPE html>
<html>
    <head>
        <title>Data peserta</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    </head>
    <body>
        <?php
        include 'nav.php';
        ?>

        <div class="container">

            <div class="row">
                <?php
                foreach ($siswa as $sw) {
                    ?>
                    <div class="card" style="width: 18rem; margin:10px;" >
                        <img height="150px" class="card-img-top" src="<?= base_url(); ?>assets/<?= $sw['foto'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $sw['nama_siswa'] ?></h5>
                            <p class="card-text"><?= $sw['email'] ?></p>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal<?= $sw['idSiswa'] ?>">Detail</button>
                        </div>
                    </div>
                    <!-- Modal Siswa-->
                    <div class="modal fade" id="myModal<?= $sw['idSiswa'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content container">
                                <div class="modal-header mr-auto">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Detail Siswa</h4>
                                </div>
                                <img height="250px" class="card-img-top" src="<?= base_url(); ?>assets/<?= $sw['foto'] ?>" alt="Card image cap">
                                <h6 class="card-text" id="myModalLabel">Detail Siswa</h6>
                                <p>Nama : <?= $sw['nama_siswa'] ?></p>
                                <p>Email : <?= $sw['email'] ?></p>
                                <p>Jenis Kelamin : <?= $sw['jk'] ?></p>
                                <p>Alamat : <?= $sw['alamat'] ?></p>
                                <p>Tanggal Lahir : <?= $sw['tgl_lahir'] ?></p>
                                <p>Jurusan : <?= $sw['jurusan'] ?></p>
                                <p>Hobby : <?= $sw['hobby'] ?></p>
                                <div class="modal-footer">
                                    <a class="btn btn-success" href="<?php echo base_url();?>index.php/InputData/edit/<?= $sw['idSiswa'] ?>">Edit</a>
                                    <a class="btn btn-danger" href="<?php echo base_url();?>index.php/InputData/hapus/<?= $sw['idSiswa'] ?>">Hapus</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>

            </div>
        </div>



    </body>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
</html>
