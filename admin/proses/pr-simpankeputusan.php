<?php
    include ('../../config/koneksi.php');

    if(isset($_POST['submit'])){
        $nomor = addslashes($_POST['nomor']);
        $tentang = addslashes($_POST['tentang']);
        $menimbang_1 = addslashes($_POST['menimbang_1']);
        $menimbang_2 = addslashes($_POST['menimbang_2']);
        $mengingat_1 = addslashes($_POST['mengingat_1']);
        $mengingat_2 = addslashes($_POST['mengingat_2']);
        $memperhatikan_1 = addslashes($_POST['memperhatikan_1']);
        $memperhatikan_2 = addslashes($_POST['memperhatikan_2']);
        $menetapkan = addslashes($_POST['menetapkan']);
        $kesatu = addslashes($_POST['kesatu']);
        $kedua = addslashes($_POST['kedua']);
        $jabatan = addslashes($_POST['jabatan']);
        $nama = addslashes($_POST['nama']);
        $otp = '';
        $status = 'PENDING';
        $jenis = 'KEPUTUSAN';
        $tanggal = "";

        $qTambahSurat = "INSERT INTO tb_skeputusan (nomer, tentang, menimbang_1, menimbang_2, mengingat_1, mengingat_2, memperhatikan_1, memperhatikan_2, menetapkan, kesatu, kedua, jabatan, nama, otp, status, jenis)
        VALUES ('$nomor', '$tentang', '$menimbang_1', '$menimbang_2', '$mengingat_1', '$mengingat_2', '$memperhatikan_1', '$memperhatikan_2', '$menetapkan', '$kesatu', '$kedua', '$jabatan', '$nama', '$otp', '$status', '$jenis');";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);

        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil menyimpan'); window.location.href='../suratkeluar.php'</script>");
    }
?>