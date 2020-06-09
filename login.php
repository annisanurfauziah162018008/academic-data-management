<!DOCTYPE html>
<html>
<head>
	<title>Academic Data Management</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
	<div class="login-form">
		<form action="check_login.php" method="post">
			<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
			<h4 class="modal-title">Academic Data Management</h4>
			<div class="form-group">
				<label>Username  :</label>
				<input type="text" name="username" class="form-control">
			</div>
			<label>Password  :</label>
			<input type="password" name="password" class="form-control">
			<br>
			<br>
			<div style="text-align: center">
				<input type="submit" name="login" value="Login" class="btn btn-success">
			</div>
			
		</form>
	</div>
</body>
<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</html>