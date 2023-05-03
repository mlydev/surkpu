<?php 
include 'header.php';

$id = $_GET['id'];
    $qCek = mysqli_query($connect, "SELECT * FROM tb_user WHERE id='$id'");
    while($row = mysqli_fetch_array($qCek))
    {
?>          
        <div class="page-heading">
        <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi User</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="post" action="../proses/pr-updateuser.php">
                                <div class="form-body">
                                    <div class="row">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nama"
                                                placeholder="" value="<?php echo $row['nama']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="username"
                                                placeholder="" value="<?php echo $row['username']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="" value="<?php echo $row['email']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="" value="<?php echo $row['password']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jabatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="jabatan"
                                                placeholder="" value="<?php echo $row['jabatan']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Level</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="level"
                                                placeholder="" value="<?php echo $row['level']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomer</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nomer"
                                                placeholder="" value="<?php echo $row['nomer']; ?>">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <input type="submit" name="submit" class="btn btn-primary me-1 mb-1" value="Konfirmasi">
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