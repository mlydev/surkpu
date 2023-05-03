<?php 
include 'header.php';

$id = $_GET['id'];
    $qCek = mysqli_query($connect, "SELECT * FROM tb_stugas WHERE id_tugas='$id'");
    while($row = mysqli_fetch_array($qCek))
    {
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

                            <form class="form form-horizontal" method="post" action="../proses/pr-updatetugas.php">

                            <?php } ?> 
                                <div class="form-body">
                                    <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $row['id_tugas']; ?>" class="form-control">
                                        <input type="hidden" name="id_user" value="<?php echo $row['id_user']; ?>" class="form-control">
                                        <input type="hidden" name="jenis" value="<?php echo $row['jenis']; ?>" class="form-control">
                                        <div class="col-md-4">
                                            <label>Nomor</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nomor"
                                                placeholder="" value="<?php echo $row['nomer']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Menimbang 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="menimbang_1"
                                                placeholder="" value="<?php echo $row['menimbang_1']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Menimbang 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="menimbang_2"
                                                placeholder="" value="<?php echo $row['menimbang_2']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Dasar 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="dasar_1"
                                                placeholder="" value="<?php echo $row['dasar_1']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Dasar 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="dasar_2"
                                                placeholder="" value="<?php echo $row['dasar_2']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kepada 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="kepada_1"
                                                placeholder="" value="<?php echo $row['kepada_1']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kepada 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="kepada_2"
                                                placeholder="" value="<?php echo $row['kepada_2']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kepada 3</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="kepada_3"
                                                placeholder="" value="<?php echo $row['kepada_3']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Untuk 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="untuk_1"
                                                placeholder="" value="<?php echo $row['untuk_1']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Untuk 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="untuk_2"
                                                placeholder="" value="<?php echo $row['untuk_2']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jabatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="jabatan"
                                                placeholder="" value="<?php echo $row['jabatan']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Atasan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nama"
                                                placeholder="" value="<?php echo $row['nama']; ?>" readonly>
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
<?php } ?>
<?php include 'footer.php' ?>