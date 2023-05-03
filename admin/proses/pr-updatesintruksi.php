<?php
    include ('../../config/koneksi.php');

    $id = $_POST['id'];
    $otp = $_POST['otp'];

    $qVerif = mysqli_query($connect, "SELECT * FROM tb_sintruksi WHERE id_intruksi='$id' AND otp='$otp'");
    $row = mysqli_num_rows($qVerif);

    if($row > 0){
      $verif = mysqli_fetch_assoc($qVerif);
      $status_surat = 'SELESAI';
    } else {
      $status_surat = 'OTP SALAH';
    }

    

    $qUpdate = "UPDATE tb_sintruksi SET status='$status_surat' WHERE tb_sintruksi.id_intruksi='$id'";
    $update = mysqli_query($connect, $qUpdate);

    if($update){
      echo ("<script LANGUAGE='JavaScript'>window.alert('Surat Berhasil Diverifikasi'); window.location.href='../suratkeluar.php'</script>");
	}else{
	 	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengonfirmasi surat'); window.location.href='#'</script>");
	}
?>
