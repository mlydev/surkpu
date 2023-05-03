<?php
    include ('../../config/koneksi.php');

    if(isset($_POST['submit'])){
        $nomor = addslashes($_POST['nomor']);
        $menimbang_1 = addslashes($_POST['menimbang_1']);
        $menimbang_2 = addslashes($_POST['menimbang_2']);
        $dasar_1 = addslashes($_POST['dasar_1']);
        $dasar_2 = addslashes($_POST['dasar_2']);
        $kepada_1 = addslashes($_POST['kepada_1']);
        $kepada_2 = addslashes($_POST['kepada_2']);
        $kepada_3 = addslashes($_POST['kepada_3'])
        $untuk_1 = addslashes($_POST['untuk_1']);
        $untuk_2 = addslashes($_POST['untuk_2']);
        $jabatan = addslashes($_POST['jabatan']);
        $nama = addslashes($_POST['nama']);
        $tanggal = "";
        $otp = '';
        $status = 'PENDING';
        $jenis = 'TUGAS';

        $qTambahSurat = "INSERT INTO tb_stugas (nomer, menimbang_1, menimbang_2, dasar_1, dasar_2, kepada_1, kepada_2, kepada_3, untuk_1, untuk_2, jabatan, nama, tanggal, otp, status, jenis)
        VALUES ('$nomor', '$menimbang_1', '$menimbang_2', '$dasar_1', '$dasar_2', '$kepada_1', '$kepada_2', '$kepada_3', '$untuk_1', '$untuk_2', '$jabatan', '$nama', '$tanggal', '$otp', '$status', '$jenis');";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);

        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil menyimpan'); window.location.href='../suratkeluar.php'</script>");


    }
?>