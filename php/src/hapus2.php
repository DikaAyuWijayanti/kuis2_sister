<?php
include "koneksi.php";

$id = $_GET['id'];
$query ="DELETE FROM kepalasekolah WHERE id='$id'";
$result = mysqli_query($connect, $query);

if($result){
	echo "Data Berhasil diHapus";
	?>
	<a href="homeCRUD2.php"> Lihat Data diTabel</a>
	<?php
}else{
	echo "Data Gagal diHapus" . mysqli_error($connect);
}
?>