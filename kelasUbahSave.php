<?php
include "../librari/inc.koneksidb.php";

if($_POST) {
	# Periksa, jika ada form kosong, buat daftar pesan error
	$message = array();
	if(trim($_POST['txtKelas'])=="") { 
		$message[] = "Nama kelas masih kosong";
	}
	
# Masukkan data dari form ke variabel
	$txtKode 	= $_POST['txtKode'];
	$txtKelas = $_POST['txtKelas'];

	# Untuk validasi, jika ada pesan error
	if(count($message)==0){	
		# Jika tidak ada pesan error, Simpan dijalankan
		$sqlUbah = "UPDATE kelas SET nm_kelas='$txtKelas'
					WHERE kd_kelas='$txtKode'";
		mysql_query($sqlUbah, $koneksiDbs)  or die ("Query ubah salah : ".mysql_error());
		
		// Redirek ke halaman tampil
		echo "<meta http-equiv='refresh' content='0; url=kelasTampil.php'>";
	}
	else {
		// Jika ada error, data yang sudah diisi disimpan ke form
		include_once "kelasUbah.php";
		
		// Tampilkan semua error di bawah form
		echo "<b> Ada Error : </b><br>";
		$nomor_error = 0;
		foreach ($message as $pesan_tampil) {
			$nomor_error++;
			echo "<font color='#FF0000'>";
			echo "$nomor_error . $pesan_tampil <br>";
			echo "</font>";
		}
		exit;
	}
}
?>