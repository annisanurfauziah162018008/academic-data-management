<?php 

//mengaktifkan session php
session_start();
//menghubungkan ke databse
include 'koneksi_db.php';

//menangkap parameter yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//mencari data username dan password yang sesuai dengan database
$data = mysqli_query($connection,"SELECT * FROM user WHERE username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan
$count = mysqli_num_rows($data);

if($count > 0) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['status'] = "login";
	header("location:index.php");
} else {
	header("location:login.php?pesan=gagal");
	
}
?>