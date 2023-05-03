<?php 
include 'header.php';

    $id = $_GET['id'];
    $qCek = mysqli_query($connect, "SELECT * FROM tb_sdinas WHERE id_dinas='$id'");
    while($row = mysqli_fetch_array($qCek)){

?>

<div class="page-heading">
        <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi Surat</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php
                                if(isset($_SESSION['lvl']) && ($_SESSION['lvl'] == 'Kepala')){
                            ?>
                            <form class="form form-horizontal" method="post" action="../proses/pr-generateotp.php">

                            <?php }else if(isset($_SESSION['lvl']) && ($_SESSION['lvl'] == 'Staff')){ ?>

                            <form class="form form-horizontal" method="post" action="../proses/pr-updatedinas.php">

                            <?php } ?>   
                                <div class="form-body">
                                    <div class="row">
                                        <input type="text" name="id" value="<?php echo $row['id_dinas']; ?>" class="form-control">
                                        <input type="text" name="id_user" value="<?php echo $row['id_user']; ?>" class="form-control">
                                        <input type="text" name="jenis" value="<?php echo $row['jenis']; ?>" class="form-control">
                                        <div class="col-md-4">
                                            <label>Nomer Surat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nomer_surat"
                                                placeholder="" value="<?php echo $row['nomer']; ?>" readonly >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="tanggal"
                                                placeholder="" value="<?php echo $row['tanggal']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Sifat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="sifat"
                                                placeholder="" value="<?php echo $row['sifat']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Lampiran</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="lampiran"
                                                placeholder="" value="<?php echo $row['lampiran']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Perihal</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="perihal"
                                                placeholder="" value="<?php echo $row['perihal']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>kepada</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="kepada"
                                                placeholder="" value="<?php echo $row['kepada']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pembuka</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea class="form-control" name="pembuka" rows="3" readonly><?php echo $row['pembuka']; ?></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Isi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea class="form-control" name="isi" rows="3" readonly><?php echo $row['isi']; ?></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penutup</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea class="form-control" name="penutup" rows="3" readonly><?php echo $row['penutup']; ?></textarea>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <?php 
                                                if(isset($_SESSION['lvl']) && ($_SESSION['lvl'] == 'Staff')){
                                            ?>
                                            <input type="text" name="otp" class="form-control" placeholder="Masukkan Kode OTP">
                                            <?php }?>
                                            <?php if($_SESSION['lvl'] == 'Administrator') {
                                            } else {?>
                                            <input type="submit" name="submit" class="btn btn-primary me-1 mb-1" value="Konfirmasi">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        </div>
<?php include 'footer.php'; 
} ?>