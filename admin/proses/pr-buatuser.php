<?php
    include ('../../config/koneksi.php');
        
    if(isset($_POST['submit'])){
        $nama = addslashes($_POST['nama']);
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $jabatan = addslashes($_POST['jabatan']);
        $level = addslashes($_POST['level']);
        $nomer = addslashes($_POST['nomer']);

        $qTambahUser = "INSERT INTO tb_user (nama, username, email, password, jabatan, level, nomer)
        VALUES ('$nama', '$username', '$email', '$password', '$jabatan', '$level', '$nomer');";
        $TambahUser = mysqli_query($connect, $qTambahUser);

        echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Membuat User'); window.location.href='../user.php'</script>");
    }
?>