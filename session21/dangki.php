<!DOCTYPE html>
<html>
<head>
	<title>FORM-DangKi</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
		$errTen = '';
		$errEmail = '';
		$errSDT = '';
		$errGt = '';
		$errDC = '';
		$errDate = '';
		if (isset($_POST['register'])) {
			if ($_POST['ten'] == '') {
				$errTen = 'Please input your name';
			} else {
				$errTen = '';
			}
			if ($_POST['email'] == '') {
				$errEmail = 'Please input your email';
			} else {
				$errEmail = '';
			}
			if ($_POST['sdt'] == '') {
				$errSDT = 'Please input your sdt';
			} else {
				$errSDT = '';
			}
			if ($_POST['gt'] == '') {
				$errGt = 'Please input your gt';
			} else {
				$errGt = '';
			}
			if ($_POST['dc'] == '') {
				$errDC = 'Please input your dc';
			} else {
				$errDC = '';
			}
			if ($_POST['ns'] == '') {
				$errDate = 'Please input your date';
			} else {
				$errDate = '';
			}
			echo("TEN:");
			echo $_POST['ten'];
			echo "<br>";
			echo("EMAIL:");
			echo $_POST['email'];
			echo "<br>";
			echo("SDT:");
			echo $_POST['sdt'];
			echo "<br>";
			echo("GIOIT TINH:");
			echo $_POST['gt'];
			echo "<br>";
			echo("DIA CHI:");
			echo $_POST['dc'];
			echo "<br>";
			echo("NGAY SINH:");
			echo $_POST['ns'];
			echo "<br>";
			
		}
	?>
	<h1>Dang Ki</h1>
	<form action="#" name="RegisterForm" method="POST">
		<p>Ten: 
			<input type="text" name="ten" value="<?php
			echo $_POST['ten'];?>">
			<p class="error"><?php echo $errTen;?></p>
		</p>
		<p>Email: 
			<input type="text" name="email">
			<p class="error"><?php echo $errEmail;?></p>
		</p>
		<p>SDT: 
			<input type="text" name="sdt">
			<p class="error"><?php echo $errSDT;?></p>
		</p>
		<p>Gioi tinh: 
			<input type="radio" name="gt" value="NAM">NAM
			<input type="radio" name="gt" value="NU">NU
			<p class="error"><?php echo $errGt;?></p>
		</p>
		<p>DC: 
			<input type="select option" name="dc">
			<p class="error"><?php echo $errDC;?></p>
		</p>
		<p>Ngay Sinh: 
			<input type="date" name="ns">
			<p class="error"><?php echo $errDate;?></p>
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>

</body>
</html>