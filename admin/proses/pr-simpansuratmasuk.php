<?php
    include ('../../config/koneksi.php');

    if(isset($_POST['submit'])){
        $no_urut = addslashes($_POST['nomer_urut']);
        $no_surat = addslashes($_POST['nomer_surat']);
        $asal = addslashes($_POST['asal']);
        $tujuan = addslashes($_POST['tujuan']);
        $tanggal = addslashes($_POST['tanggal']);
        $keterangan = addslashes($_POST['keterangan']);

        $tgl_surat = date('Y-m-d', strtotime($tanggal));

        date_default_timezone_set('Asia/Jakarta');
        $tanggal_entry = date('Y-m-d H:i:s');
        $thnNow = date("Y");

        $name_file_lengkap  = $_FILES['file_surat']['name'];
        $name_file          = substr($name_file_lengkap, 0, strripos($name_file_lengkap, '.'));
        $ext_file           = substr($name_file_lengkap, strripos($name_file_lengkap, '.'));
        $tipe_file          = $_FILES['file_surat']['type'];
        $tmp_file           = $_FILES['file_surat']['tmp_name'];

        $name_baru = $thnNow. '-' .$no_urut. $ext_file;
        $path = "../../surat/".$name_baru;
        move_uploaded_file($tmp_file, $path);

        $qTambahSurat = "INSERT INTO tb_sm (no_urut, no_surat, asal, tujuan, tgl_surat, keterangan, file) 
        VALUES ('$no_urut', '$no_surat', '$asal', '$tujuan', '$tgl_surat', '$keterangan', '$name_baru');";
        $TambahSurat = mysqli_query($connect, $qTambahSurat);

        if($TambahSurat){
            echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil menyimpan'); window.location.href='../suratmasuk.php'</script>");
        }else{
             echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengonfirmasi surat'); window.location.href='#'</script>");
        }
        
    }
?>
