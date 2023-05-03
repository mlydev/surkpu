<?php
    include ('../../config/koneksi.php');
        
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nama = addslashes($_POST['nama']);
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password 	= md5($_POST['password']);
        $jabatan = addslashes($_POST['jabatan']);
        $level = addslashes($_POST['level']);
        $nomer = addslashes($_POST['nomer']);

        $qTambahUser = "UPDATE tb_user SET nama = '$nama', username = '$username', email = '$email', password = MD5('$password'), jabatan = '$jabatan', level = '$level', nomer = '$nomer' WHERE tb_user.id='$id';";
        $update = mysqli_query($connect,$qTambahUser);

        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil menyimpan'); window.location.href='../user.php'</script>");
    }
?>