<?php
	session_start();
	include ('config/koneksi.php');	

	$username 	= $_POST['username'];
	$password 	= md5($_POST['password']);
	
	$qLogin 	= mysqli_query($connect, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
	$row 		= mysqli_num_rows($qLogin);
	
	if($row > 0){
		$login = mysqli_fetch_assoc($qLogin);
		if($login['level']=="admin"){
			$_SESSION['username'] = $username;
			$_SESSION['lvl'] = "Administrator";

			header("location:admin/");
		}else if($login['level']=="kepala"){
			$_SESSION['username'] = $username;
			$_SESSION['lvl'] = "Kepala";

			header("location:admin/");
		}else if($login['level']=="staff"){
			$_SESSION['username'] = $username;
			$_SESSION['lvl'] = "Staff";

			header("location:admin/");
		}else{
			header("location:index.php?pesan=login-gagal");
		}	
	}else{
		header("location:index.php?pesan=login-gagal");
	}
?>