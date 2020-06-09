<?php
include_once('koneksi_db.php');
             	if(isset ($_POST['Submit'])){
          		$name = $_POST['name'];
          		$email = $_POST['email'];
          		$phone = $_POST['phone'];
          		$message = $_POST['message'];
          	}

          	$result = mysqli_query($connection, "INSERT INTO contact_me(name,email,phone,message) VALUES ('$name', '$email', '$phone', '$message')");
          header('Location: index.php');
          	echo '<div class = "alert alert-primary" role="alert"> Pesan anda sudah terkirim! </div>';
          ?>