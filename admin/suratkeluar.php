<?php include 'header.php' ?>

        <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Surat Keluar</h4>
                    </div>
                    <div class="card-body">
                        
                        <!-- table bordered -->
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>TANGGAL</th>
                                        <th>JENIS</th>
                                        <th>NOMOR</th>
                                        <th>PEMBUAT</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $conn = mysqli_connect('localhost', 'root', '', 'supu');

                                        $tables = array('tb_sintruksi', 'tb_stugas', 'tb_sdinas', 'tb_sperintah', 'tb_skeputusan');

                                        foreach ($tables as $table) {
                                            $query = "SELECT * FROM " . $table;
                                            $result = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                    <tr>
                                        <?php 
                                            $tgl_lhr = date($row['tanggal']);
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
                                        <td class="text-bold-500"><?php echo $tgl ." " . $blnIndo[$bln] ." ". $thn; ?></td>
                                        <td><?php echo $row['jenis'] ?></td>
                                        <td class="text-bold-500"><?php echo $row['nomer'] ?></td>
                                        <td><?php echo $row['id_user'] ?></td>
                                        <td><?php echo $row['status'] ?></td>
                                        <td>
                                            <?php if($row['jenis']=='INTRUKSI'){
                                                ?>                                      
                                                    <a href="lihat/sintruksi.php?id=<?php echo $row['id_intruksi'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="check"></i></a>
                                            
                                                    <a href="proses/pr-cetakintruksi.php?id=<?php echo $row['id_intruksi'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a>
                                            <?php } else if($row['jenis']=='TUGAS'){
                                                ?>
                                                <a href="lihat/stugas.php?id=<?php echo $row['id_tugas'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="check"></i></a>
                                            
                                                    <a href="proses/pr-cetaktugas.php?id=<?php echo $row['id_tugas'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a>
                                            <?php } else if($row['jenis']=='DINAS'){
                                                ?>
                                                <a href="lihat/sdinas.php?id=<?php echo $row['id_dinas'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="check"></i></a>
                                            
                                                    <a href="proses/pr-cetakdinas.php?id=<?php echo $row['id_dinas'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a>
                                            <?php } else if($row['jenis']=='PERINTAH'){
                                                ?>
                                                <a href="lihat/sperintah.php?id=<?php echo $row['id_perintah'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="check"></i></a>
                                            
                                                    <a href="proses/pr-cetakperintah.php?id=<?php echo $row['id_perintah'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a>
                                            <?php } else if($row['jenis']=='KEPUTUSAN'){
                                                ?>
                                                <a href="lihat/skeputusan.php?id=<?php echo $row['id_keputusan'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="check"></i></a>
                                            
                                                    <a href="proses/pr-cetakkeputusan.php?id=<?php echo $row['id_keputusan'] ?>"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="mail"></i></a>
                                            <?php }?>
                                                </td>
                                    </tr>
                                    <?php 
                                        } }}
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