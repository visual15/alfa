<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<table border="1" cellpadding="5" cellspacing="0" align="center">
			<tr align="center">
				<td>NIM</td>
				<td>Nama</td>
				<td>Angkatan</td>
				<td>Fakultas</td>
				<td>Program</td>
				<td colspan="2">Aksi</td>
			</tr>
			<?php while($row=$this->model->fetch($data)){
				echo"
					<tr>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
						<td>$row[4]</td>
						<td>$row[5]</td>
						<td><a href='index.php?e=$row[1]'>Edit</a></td>
						<td><a href='index.php?d=$row[1]'onclick=\"return confirm('hapus data?')\"\>delete</a></td>
					</tr>
				";
			}?>
		</table>
		<center><a href='index.php?i=add'>tambah data</a></center>
	</body>
</html>