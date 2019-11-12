<?php
	include_once('arr_mahasiswa');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>

	<form method="post">
		<table border=0>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
					<input type="text" name="txtNim">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="txtNama">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="txtAlamat"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="submitMhs">
					<a href="index.php">Refresh</a>
				</td>
			</tr>
		</table>
		<br>		
	</form>

	<?php
		if (isset($_POST['submitMhs'])) {

			$nim = $_POST['txtNim'];
			$nama = $_POST['txtNama'];
			$alamat = $_POST['txtAlamat'];

			$latest = count($mahasiswa['nim']);

			if (count($mahasiswa['nim']) == 0) {
				$mahasiswa['nim'][0] = $nim;
				$mahasiswa['nama'][0] = $nama;
				$mahasiswa['alamat'][0] = $alamat;
			}else{				
				$mahasiswa['nim'][$latest] = $nim;
				$mahasiswa['nama'][$latest] = $nama;
				$mahasiswa['alamat'][$latest] = $alamat;
			}

	?>
			<table border="0">
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
				</tr>
				
				<?php
					echo count($mahasiswa['nim']);
					for ($i = 0; $i < count($mahasiswa['nim']) ; $i++) {
						echo "sample ".$i;
						echo "<tr>";
						echo "<td>".$mahasiswa['nim'][$i]."</td>";
						echo "<td>".$mahasiswa['nama'][$i]."</td>";
						echo "<td>".$mahasiswa['alamat'][$i]."</td>";
						echo "</tr>";
					}
				?>
				
			</table>
	<?php
		}else{
	?>
			<table border="0">
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Alamat</th>
				</tr>
				
				<?php
					for ($i = 0; $i < count($mahasiswa['nim']) ; $i++) {
						echo "<tr>";
						echo "<td>".$mahasiswa['nim'][$i]."</td>";
						echo "<td>".$mahasiswa['nama'][$i]."</td>";
						echo "<td>".$mahasiswa['alamat'][$i]."</td>";
						echo "</tr>";
					}
				?>
				
			</table>
	<?php	
		}
	?>

</body>
</html>


