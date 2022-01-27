<?php 

session_start();
 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($conn,"select * from tbadmin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){
		$_SESSION['status_login'] = true;
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:home_admin.php");
	}else if($data['level']=="user"){
		$_SESSION['status_login'] = true;
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		header("location:home.php");
 
	}else{
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>