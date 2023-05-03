<?php include 'header.php' ?>

        <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Surat Masuk</h4>
                    </div>
                    <div class="card-body">
                        <?php if($_SESSION['lvl']=="Kepala"){ ?>
                            
                        <?php } else { ?>
                            <button><a href="surat/buatsm.php">TAMBAH SURAT</a></button>
                        <?php } ?>
                        
                        <!-- table bordered -->
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>TANGGAL</th>
                                        <th>NOMER URUT</th>
                                        <th>NOMER SURAT</th>
                                        <th>ASAL</th>
                                        <th>KETERANGAN</th>
                                        <th>LIHAT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $qTampil = mysqli_query($connect, "SELECT * FROM tb_sm");
                                        if ($qTampil -> num_rows > 0){
                                            foreach ($qTampil as $row){

                                            ?>
                                    <tr>
                                        <?php 
                                            $tgl_lhr = date($row['tgl_surat']);
                                            $tgl = date('d', strtotime($tgl_lhr));
                                            $bln = date('F', strtotime($tgl_lhr));
                                            $thn = date('Y', strtotime($tgl_lhr));
                                            $blnIndo = array(
                                                'January' => 'Januari',
                                                'February' => 'Februari',
                                                'March' => 'Maret',
                                                'April' => 'April',
                                                'May' => 'Mei',
                                                'June' => 'Juni',
                                                'July' => 'Juli',
                                                'August' => 'Agustus',
                                                'September' => 'September',
                                                'October' => 'Oktober',
                                                'November' => 'November',
                                                'December' => 'Desember'
                                            );
                                        ?>
                                        <td class="text-bold-500"><?php echo $tgl . $blnIndo[$bln] . $thn; ?></td>
                                        <td><?php echo $row['no_urut'] ?></td>
                                        <td class="text-bold-500"><?php echo $row['no_surat'] ?></td>
                                        <td><?php echo $row['asal'] ?></td>
                                        <td><?php echo $row['keterangan'] ?></td>
                                        <td><a href="../surat/<?php echo $row['file'] ?>"><i
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