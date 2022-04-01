<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['txtemail'];
$password = $_POST['txtpassword'];

// menghitung jumlah data yang ditemukan
$login = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' AND password='$password'");

$login_nama = mysqli_query($koneksi,"SELECT * FROM users WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($login);
$data_cek= mysqli_fetch_array($login_nama,MYSQLI_BOTH);

// cek apakah email dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['hak_akses']=="Admin"){
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['id_user'] = $data_cek['id_user'];
		$_SESSION['nama'] = $data_cek['nama'];
		$_SESSION['hak_akses'] = $data_cek['hak_akses'];
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");

	}else if($data['hak_akses']=="HRD"){
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['id_user'] = $data_cek['id_user'];
		$_SESSION['nama'] = $data_cek['nama'];
		$_SESSION['hak_akses'] = $data_cek['hak_akses'];
		// alihkan ke halaman dashboard admin
		header("location:hrd/index.php");

	}else if($data['hak_akses']=="Pelamar"){
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['id_user'] = $data_cek['id_user'];
		$_SESSION['nama'] = $data_cek['nama'];
		$_SESSION['Pelamar'] = $data_cek['hak_akses'];
		// alihkan ke halaman dashboard admin
		header("location:index.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
	
}else{
	header("location:index.php?pesan=gagal");
}

?>