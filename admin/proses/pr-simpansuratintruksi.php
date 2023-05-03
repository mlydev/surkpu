<?php
    include ('../../config/koneksi.php');

    if(isset($_POST['submit'])){
        $intruksi = addslashes($_POST['intruksi']);
        $nomer = addslashes($_POST['nomer']);
        $tahun = addslashes($_POST['tahun']);
        $tentang = addslashes($_POST['tentang']);
        $menimbang_1 = addslashes($_POST['menimbang_1']);
        $menimbang_2 = addslashes($_POST['menimbang_2']);
        $mengingat = addslashes($_POST['mengingat']);
        $kepada = addslashes($_POST['kepada']);
        $alasan_1 = addslashes($_POST['alasan_1']);
        $alasan_2 = addslashes($_POST['alasan_2']);
        $alasan_3 = addslashes($_POST['alasan_3']);
        $tanggal = addslashes($_POST['tanggal']);
        $jabatan = addslashes($_POST['jabatan']);
        $nama = addslashes($_POST['nama']);
        $otp = '';
        $status = 'PENDING';
        $jenis = 'INTRUKSI'

        $qTambahSurat = "INSERT INTO tb_sintruksi (intruksi, nomer, tahun, tentang, menimbang_1, menimbang_2, mengingat, kepada, alasan_1, alasan_2, alasan_3, tanggal, jabatan, nama, otp, status, jenis)
        VALUES ('$intruksi', '$nomer', '$tahun', '$tentang', '$menimbang_1', '$menimbang_2', '$mengingat', '$kepada', '$alasan_1', '$alasan_2', '$alasan_3', '$tanggal', '$jabatan', '$nama', '$otp', '$status', '$jenis');";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);

        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil menyimpan'); window.location.href='../suratkeluar.php'</script>");


    }
?>