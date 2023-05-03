<?php
    include ('../../config/koneksi.php');

    function generateOTP() {
        $otp = "";
        for ($i = 0; $i < 6; $i++) {
            $otp .= rand(0, 9);
        }
        return $otp;
    }

    $account_sid = 'ACb3561039c0eb28addeff433a73e06bd7';
    $auth_token = 'a8ac4e92eefd979385a0053393279c1c';

    $id_user = $_POST['id_user'];
    $stmt = $connect ->prepare("SELECT nomer FROM tb_user WHERE id = ? ");
    $stmt -> bind_param("i", $id_user);
    $stmt -> execute();
    $result = $stmt -> get_result();
    $row = $result -> fetch_assoc();
    $phone = $row['nomer'];
        

    $id = $_POST['id'];
    $jenis = $_POST['jenis'];
    $otp = generateOTP();

    include ('../../assets/twilio/Base/otp.php');

    if($jenis == 'DINAS'){
        $qUpdate = "UPDATE tb_sdinas SET otp='$otp' WHERE tb_sdinas.id_dinas='$id'";
        $update = mysqli_query($connect, $qUpdate);
    } else if ($jenis == 'INTRUKSI'){
        $qUpdate = "UPDATE tb_sintruksi SET otp='$otp' WHERE tb_sintruksi.id_intruksi='$id'";
        $update = mysqli_query($connect, $qUpdate);
    } else if ($jenis == 'KEPUTUSAN'){
        $qUpdate = "UPDATE tb_skeputusan SET otp='$otp' WHERE tb_skeputusan.id_keputusan='$id'";
        $update = mysqli_query($connect, $qUpdate);
    } else if ($jenis == 'PERINTAH'){
        $qUpdate = "UPDATE tb_sperintah SET otp='$otp' WHERE tb_sperintah.id_perintah='$id'";
        $update = mysqli_query($connect, $qUpdate);
    } else if ($jenis == 'TUGAS'){
        $qUpdate = "UPDATE tb_stugas SET otp='$otp' WHERE tb_stugas.id_tugas='$id'";
        $update = mysqli_query($connect, $qUpdate);
    }

    if($update){
		echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil mengirim kode'); window.location.href='../suratkeluar.php'</script>");
	}else{
	 	echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengonfirmasi surat'); window.location.href='#'</script>");
	}
?>
