<!DOCTYPE html>
<html>
<head>
	<title>Form example - Session 21</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	
		$errName = $errPass = '';
		if (isset($_POST['register'])) {
			$a = $_POST['name'];
			$b = $_POST['name'];
			function tinh($a,$b){
			$c = $a + $b;
			return $c;
		}
		echo tinh ($_POST['name'],$_POST['name']);
			if ($_POST['name'] == '') {
				$errName = 'Please input your name';
			} else {
				$errName = '';
			}
			if ($_POST['name'] == '') {
				$errPass = 'Please input your name';
			} else {
				$errPass = '';
			}
			//echo $_POST['name'];
			//echo "<br>";
			//echo $_POST['name'];
		}
	?>
	<h1>TINH TONG</h1>
	<form action="#" name="RegisterForm" method="POST">
		<p>So a: 
			<input type="text" name="name">
			<p class="error"><?php echo $errName;?></p>
		</p>
		<p>So b: 
			<input type="text" name="name">
			<p class="error"><?php echo $errPass;?></p>
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>