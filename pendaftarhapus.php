<?php
include_once "../librari/inc.koneksidb.php";

# Baca, jika ada variabel URL
if($_GET) {
	// Perintah Hapus data
	$sqlHapus = "DELETE FROM siswa WHERE no_siswa='".$_GET['noSiswa']."'";		
	mysql_query($sqlHapus, $koneksiDbs)  or die ("Query hapus salah : ".mysql_error());
	
	// Kembali ke daftar siswa
	echo "<meta http-equiv='refresh' content='0; url=siswaTampil.php'>";
}
else {
	// Jika tidak ada variabel URL, pesan ini ditampilkan
	echo "Tidak ada jurusan yang dihapus";
}
?>