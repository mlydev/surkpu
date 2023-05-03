<?php include 'header.php' ?>

        <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi User</h4>
                    </div>
                    <div class="card-body">
                        <?php if($_SESSION['lvl']=="Administrator"){ ?>
                            <button><a href="buatuser.php">TAMBAH USER</a></button>
                        <?php } else { ?>
                            
                        <?php } ?>
                        
                        <!-- table bordered -->
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID USER</th>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        <th>JABATAN</th>
                                        <th>LEVEL</th>
                                        <th>NOMER</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $qTampil = mysqli_query($connect, "SELECT * FROM tb_user");
                                        if ($qTampil -> num_rows > 0){
                                            foreach ($qTampil as $row){

                                            ?>
                                    <tr>
                                        <td class="text-bold-500"><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td class="text-bold-500"><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['jabatan'] ?></td>
                                        <td><?php echo $row['level'] ?></td>
                                        <td><?php echo $row['nomer']?></td>
                                        <td><a href="lihat/user.php?id=<?php echo $row['id'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a>
                                                </td>
                                    </tr>
                                    <?php 
                                        } }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php' ?>