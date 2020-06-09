<?php
	include_once 'koneksi_db.php';

	if(isset($_POST['Submit'])){
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jabatan_akademik = $_POST['jabatan_akademik'];
		$prodi = $_POST['prodi'];

		//insert usert into table
		$result = msqli_query($connection, "INSERT INTO dosen (nip,nama,alamat,jabatan_akademik,prodi)VALUES('$nip','$nama','$alamat','$jabatan_akademik','$prodi')");
		echo '<div class="alert alert-primary" role="alert">Data user berhasil ditambahkan!</div>';
		header("Location: index.php");
	}