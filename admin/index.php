<?php include 'header.php'; ?>
        <div class="page-heading">
          <h3>Home</h3>
        </div>
        <div class="page-content">
          <section class="row">
            <div class="col-12 col-lg-9">
              <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-4 py-4-5">
                      <div class="row">
                        <div
                          class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                        >
                          <div class="stats-icon purple mb-2">
                            <i class="iconly-boldShow"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                          <h6 class="text-muted font-semibold">
                            Surat Masuk
                          </h6>
                          <h6 class="font-extrabold mb-0">
							<?php
								include ('../config/koneksi.php');
								$qTampil = mysqli_query($connect, "SELECT * FROM tb_sm");
								$jumlahSuratMasuk = mysqli_num_rows($qTampil);
								echo $jumlahSuratMasuk
							?>
						  </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-4 py-4-5">
                      <div class="row">
                        <div
                          class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                        >
                          <div class="stats-icon blue mb-2">
                            <i class="iconly-boldProfile"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                          <h6 class="text-muted font-semibold">Surat Keluar</h6>
                          <h6 class="font-extrabold mb-0">
						  	<?php
								include ('../config/koneksi.php');
								$qTampil = mysqli_query($connect, "(SELECT status FROM tb_sintruksi)
                UNION ALL
                (SELECT status FROM tb_stugas)
                UNION ALL
                (SELECT status FROM tb_sdinas)
                UNION ALL
                (SELECT status FROM tb_sperintah)
                UNION ALL
                (SELECT status FROM tb_skeputusan)");
								$jumlahSuratKeluar = mysqli_num_rows($qTampil);
								echo $jumlahSuratKeluar
							?>
						  </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-4 py-4-5">
                      <div class="row">
                        <div
                          class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                        >
                          <div class="stats-icon green mb-2">
                            <i class="iconly-boldAdd-User"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                          <h6 class="text-muted font-semibold">Permintaan</h6>
                          <h6 class="font-extrabold mb-0">
						  <?php
								include ('../config/koneksi.php');
								$qTampil = mysqli_query($connect, "(SELECT status FROM tb_sintruksi WHERE status='pending')
                UNION ALL
                (SELECT status FROM tb_stugas WHERE status='pending')
                UNION ALL
                (SELECT status FROM tb_sdinas WHERE status='pending')
                UNION ALL
                (SELECT status FROM tb_sperintah WHERE status='pending')
                UNION ALL
                (SELECT status FROM tb_skeputusan WHERE status='pending')");
								$jumlahSuratKeluar = mysqli_num_rows($qTampil);
								echo $jumlahSuratKeluar
							?>
						  </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-4 py-4-5">
                      <div class="row">
                        <div
                          class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                        >
                          <div class="stats-icon red mb-2">
                            <i class="iconly-boldBookmark"></i>
                          </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                          <h6 class="text-muted font-semibold">Selesai</h6>
                          <h6 class="font-extrabold mb-0">
						  <?php
								include ('../config/koneksi.php');
								$qTampil = mysqli_query($connect, "(SELECT status FROM tb_sintruksi WHERE status='selesai')
                UNION ALL
                (SELECT status FROM tb_stugas WHERE status='selesai')
                UNION ALL
                (SELECT status FROM tb_sdinas WHERE status='selesai')
                UNION ALL
                (SELECT status FROM tb_sperintah WHERE status='selesai')
                UNION ALL
                (SELECT status FROM tb_skeputusan WHERE status='selesai')");
								$jumlahSuratKeluar = mysqli_num_rows($qTampil);
								echo $jumlahSuratKeluar
							?>
						  </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>
					  <?php
                        $tanggal = date('D d F Y');
                        $hari = date('D', strtotime($tanggal));
                        $bulan = date('F', strtotime($tanggal));
                        $hariIndo = array(
                          'Mon' => 'Senin',
                          'Tue' => 'Selasa',
                          'Wed' => 'Rabu',
                          'Thu' => 'Kamis',
                          'Fri' => 'Jumat',
                          'Sat' => 'Sabtu',
                          'Sun' => 'Minggu',
                        );
                        $bulanIndo = array(
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
                        echo $hariIndo[$hari] . ', ' . date('d ') . $bulanIndo[$bulan] . date(' Y');
                      ?>
					  </h4>
                    </div>
                    <div class="card-body">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/KPU_Logo.svg" alt="" width=30%>
                      <h2>Selamat datang di Sistem Surat KPU Pati</h2>
                      <p>Sistem ini dibuat untuk memudahkan proses pembuatan surat dan pengelolaan surat</p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-12 col-lg-3">
              <div class="card">
                <div class="card-body py-4 px-4">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                      <img src="../assets/images/faces/1.jpg" alt="Face 1" />
                    </div>
                    <div class="ms-3 name">
                      <h5 class="font-bold"><?php echo $_SESSION['lvl'] ?></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
<?php include 'footer.php' ?>