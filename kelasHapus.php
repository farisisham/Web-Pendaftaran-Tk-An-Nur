<?php
include_once "../librari/inc.koneksidb.php";

# Baca, jika ada variabel URL
if($_GET) {
	// Perintah Hapus data
	$sqlHapus = "DELETE FROM kelas WHERE kd_kelas='".$_GET['Kode']."'";		
	mysql_query($sqlHapus, $koneksiDbs)  or die ("Query hapus salah : ".mysql_error());
	
	// Jika berhasil dihapus, pesan ini ditampilkan
	echo "Data Kelas berhasil dihapus";
	
	// Daftar jurusan dipanggil kembali setelah berhasil menghapus
	include "kelasTampil.php";
}
else {
	// Jika tidak ada variabel URL, pesan ini ditampilkan
	echo "Tidak ada kelas yang dihapus";
}
?>