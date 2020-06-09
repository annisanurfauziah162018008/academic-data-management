<?php
include_once 'koneksi_db.php';
$nrp = $_GET['nrp'];
//$sql = "DELETE FROM dosen WHERE nip = '$nip'";
$result = mysqli_query($connection, "DELETE FROM mahasiswa WHERE nrp = '$nrp'");
header("Location:index.php")
?>