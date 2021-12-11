<html>
<head>
<link rel="stylesheet" type="text/css" href="styleLinkAdmin.css"/>
</head>
<body>
	<table>
		<a href="index.php">Kembali</a>
		<tr>
			<th> NIP</th>
			<th> Nama </th>
			<th> Alamat </th>
			<th> Pangkat </th>

		</tr>
		<?php
		include "koneksi.php";

		$query = "SELECT * FROM kepala_sekolah";
		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td> <?php echo $row["nip"] ?> </td><
					<td> <?php echo $row["nama"] ?></td>
					<td> <?php echo $row["jabatan"] ?></td>
					<td> <?php echo $row["kontak"] ?></td>
					<td> <?php echo $row["alamat"] ?></td>
					<?php
			}
		}
		else{
			echo " 0 results";
		}
		?>
		<a href="dahulu.php">Data Kepala Sekolah periode 2000/2020</a>
	</table>
</body>
</html>