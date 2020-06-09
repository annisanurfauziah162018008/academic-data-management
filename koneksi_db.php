<?php

$connection = mysqli_connect("localhost:3307", "root", "", "academic_data_management");
if($connection){
	echo "Sukses terhubung ke MYSQL";
}else{
	echo"Gagal terhubung ke MYSQL";
}

?> 