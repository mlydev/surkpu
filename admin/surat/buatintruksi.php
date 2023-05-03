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
                            <form class="form form-horizontal" method="post" action="../proses/pr-simpansuratintruksi.php">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Intruksi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="intruksi"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomor</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nomer"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tahun</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="tahun"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tentang</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="tentang"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Menimbang 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="menimbang_1"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Menimbang 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="menimbang_2"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mengingat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="mengingat"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kepada</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="kepada"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alasan 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="alasan_1"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alasan 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="alasan_2"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alasan 3</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="alasan_3"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="tanggal"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jabatan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="jabatan"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama Atasan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nama"
                                                placeholder="">
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