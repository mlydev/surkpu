<?php
    include ('../../config/koneksi.php');

    $id = $_POST['id'];
    $otp = $_POST['otp'];

    $qVerif = mysqli_query($connect, "SELECT * FROM tb_stugas WHERE id_tugas='$id' AND otp='$otp'");
    $row = mysqli_num_rows($qVerif);

    if($row > 0){
      $verif = mysqli_fetch_assoc($qVerif);
      $status_surat = 'SELESAI';
    } else {
      $status_surat = 'OTP SALAH';
    }

    

    $qUpdate = "UPDATE tb_stugas SET status='$status_surat' WHERE tb_stugas.id_tugas='$id'";
    $update = mysqli_query($connect, $qUpdate);

    if($update){
      echo ("<script LANGUAGE='JavaScript'>window.alert('Surat Berhasil Diverifikasi'); window.location.href='../suratkeluar.php'</script>");
	}else{
	 	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengonfirmasi surat'); window.location.href='#'</script>");
	}
?>
