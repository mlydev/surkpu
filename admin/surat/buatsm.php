<?php include 'header.php' ?>
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
                            <form class="form form-horizontal" method="post" action="../proses/pr-simpansuratmasuk.php" enctype="multipart/form-data">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                          <?php 
                                            $sql2   = "SELECT * FROM tb_sm ORDER BY no_urut DESC LIMIT 1";
                                            $query2 = mysqli_query ($connect, $sql2);
                                            $data   = mysqli_fetch_array($query2);
                                            $jumlah = mysqli_num_rows($query2);
                                            $nomer  = $data['no_urut'];

                                            if ($jumlah = 0) {
                                              $nomerbaru = "0001";
                                            } else {
                                              $nomermax = substr($nomer,0,4);
                                              $nomerbaru = intval($nomermax)+1;
                                            }
                                           ?>
                                            <label>Nomer Urut</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nomer_urut"
                                                placeholder="" readonly value="<?php echo "$nomerbaru" ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomer Surat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nomer_surat"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Asal</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="asal"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tujuan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="tujuan"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="tanggal"
                                                placeholder="" id="datepicker">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Keterangan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="keterangan"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>File</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="file" accept="application/pdf" class="basic-filepond" name="file_surat" id="file_surat" autocomplete="off"/>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <input type="submit" name="submit" class="btn btn-primary me-1 mb-1" value="Submit">
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
<?php include 'footer.php' ?>