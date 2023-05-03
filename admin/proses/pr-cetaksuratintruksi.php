<?php
	session_start();

	if(empty($_SESSION['username'])){
	    header("location:../../login.php");
	}else if(!isset($_SESSION['lvl'])){
		header("location:../../login.php");
	}

    include ('../../config/koneksi.php');

    $id = $_GET['id'];
    $qCek = mysqli_query($connect, "SELECT * FROM tb_sk WHERE id_sk='$id'");
    while($row = mysqli_fetch_array($qCek)){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Surat</title>
    <link rel="stylesheet" href="../../assets/css/formatsurat.css" type="text/css">

    <style>
        @page {margin: 0}
        body {
            margin: 1cm;
            margin-left: 2cm;
            margin-right: 2cm;
            font-font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>
<body>
    <div>
        <table width="100%">
            <tr><img src="https://upload.wikimedia.org/wikipedia/commons/4/46/KPU_Logo.svg" alt="" class="logo"></tr>
            <div class="header">
                <h4 class="kop" style="text-transform: uppercase">KOMISI PEMILIHAN UMUM</h4>
                <h4 class="kop" style="text-transform: uppercase">REPUBLIK INDONESIA</h4>
                <h4 class="kop" style="text-transform: uppercase">INSPEKTUR UTAMA</h4>
                <h4 class="kop2" style="text-transform: uppercase">ALAMAT</h4>
            </div>
        </table>
        <br>
        <div class="clear"></div>
        <div id="isi3">
            <table width="100%">
                <tr>
                    <td width="30%" class="indentasi">Nomor</td>
                    <td width="2%">:</td>
                    <td width="55%"><?php echo $row['nomer'] ?></td>
                    <td>
                        Pati,
                        <?php
					$tanggal = date('d F Y');
					$bulan = date('F', strtotime($tanggal));
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
					echo date('d ');
				?>
                    </td>
                </tr>
                <tr>
                    <td width="30%" class="indentasi">Sifat</td>
                    <td width="2%">:</td>
                    <td width="55%"><?php echo $row['sifat'] ?></td>
                    <td>
                        <?php echo $bulanIndo[$bulan] . date(' Y') ?>
                    </td>
                </tr>
                <tr>
                    <td width="30%" class="indentasi">Lampiran</td>
                    <td width="2%">:</td>
                    <td width="55%"><?php echo $row['lampiran'] ?></td>
                    <td>
                       Surat
                    </td>
                </tr>
                <tr>
                    <td width="30%" class="indentasi">Perihal</td>
                    <td width="2%">:</td>
                    <td width="55%"><?php echo $row['perihal'] ?></td>
                </tr>
            </table>
            <br>
            <table width="100%">
                <tr>
                    <td width="3%">Yth</td>
                    <td width="26%"><?php echo $row['kepada'] ?></td>
                    <td widgth="69%"></td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <table width="100%">
                <tr>
                    <td>
                        <p><?php echo $row['pembuka'] ?></p>
                    </td>
                </tr>
            </table>
            <br>
            <table width="100%">
                <tr>
                    <td>
                        <p><?php echo $row['isi'] ?></p>
                    </td>
                </tr>
            </table>
            <br>
            <table width="100%">
                <tr>
                    <td>
                        <p><?php echo $row['penutup'] ?></p>
                    </td>
                </tr>
            </table>
        </div>
        <table width="100%">
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td width="10%"></td>
                <td width="30%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td align="center">
                    <?php echo $row['jabatan'] ?>
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td width="10%"></td>
                <td width="30%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td align="center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/KPU_Logo.svg" alt="" width="30%">
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td width="10%"></td>
                <td width="30%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td width="10%"></td>
                <td align="center">
                    <?php echo $row['nama'] ?>
                </td>
            </tr>

        </table>
    </div>
    <script>
	window.print();
</script>
</body>
</html>


<?php } ?>