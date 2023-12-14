<?php
if ($_SESSION['level'] == "admin") {
	include "koneksi.php";
	if (isset($_GET['nim'])) {
		$nim = $_GET['nim'];
		$hapus = "delete from tblmahasiswa where nim='$nim'";
		$qhapus = mysqli_query($koneksi, $hapus);
		if ($qhapus) {
			header("location:?page=mahasiswa");
		}
	} else {
		header("location:?page=mahasiswa");
	}
} else {
	echo "<font color='red'><h3>Anda bukan Admin</h3></font>";
}
