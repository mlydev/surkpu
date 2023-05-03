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
                                            <label>Nomer Surat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="nomer_surat"
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
                                            <label>Sifat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="sifat"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Lampiran</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="lampiran"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Perihal</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="perihal"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>kepada</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" name="kepada"
                                                placeholder="">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Pembuka</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea class="form-control" name="pembuka" rows="3"></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Isi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea class="form-control" name="isi" rows="3"></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penutup</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <textarea class="form-control" name="penutup" rows="3"></textarea>
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