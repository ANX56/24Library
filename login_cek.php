<?php 
session_start();
include 'koneksi.php';
 
$username = $_POST['email'];
$password = $_POST['password'];
 
 
$login = mysqli_query($koneksi,"SELECT * FROM user WHERE Email='$username' AND Password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){ 
	$data = mysqli_fetch_assoc($login);
	$nama = $data['Name'];
	if($data['Role']=="Admin"){
		$_SESSION['Email'] = $username;
		$_SESSION['Role'] = "Admin";
		header("location:index_admin.php");
	} else if($data['Role']=="Member"){
		$_SESSION['Email'] = $username;
		$_SESSION['Role'] = "Member";
		header("location:index_member.php"); 
	} else{
		header("location:index.php?pesan=gagal");
	}	
} else{
	header("location:index.php?pesan=gagal");
}