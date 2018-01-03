<!DOCTYPE html>
<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[1]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[2]?>" size="45" /></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[3]?>" size="45" /></td>
				</tr>
				<tr align="center">
					<td>fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[4]?>" size="45" /></td>
				</tr>
				<tr align="center">
					<td>program</td>
					<td>:</td>
					<td><input type="text" name="program" value="<?=$row[5]?>" size="45" /></td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$main=new controller();
		$main->update();
	}
?>