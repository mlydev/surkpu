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
                            <form class="form form-horizontal" method="post" action="../proses/pr-simpansurattugas.php">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nomor</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nomor"
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
                                            <label>Dasar 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="dasar_1"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Dasar 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="dasar_2"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kepada 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="kepada_1"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kepada 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="kepada_2"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kepada 3</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="kepada_3"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Untuk 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="untuk_1"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Untuk 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="untuk_2"
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