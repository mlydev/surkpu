<?php include ('../config/koneksi.php');

$sql = "UPDATE tb_sk SET otp='' WHERE created_at < DATE_ADD(NOW(), INTERVAL -5 MINUTE";

?>