<?php
include_once "../librari/inc.koneksidb.php";
include_once "../librari/inc.librari.php";

if($_POST) {
	# Periksa, jika ada form kosong, buat daftar pesan error
	$message = array();
	if(trim($_POST['txtKelas'])=="") { 
		$message[] = "Nama kelas masih kosong";
	}
	
	# Baca Variabel Form
	$txtKelas = $_POST['txtKelas'];
	
	if(count($message)==0){	
		# Jika tidak ada pesan error, Simpan dijalankan
		$kdKelas = buatKode("kelas","K");
		$sqlSimpan = "INSERT INTO kelas (kd_kelas, nm_kelas)
					  VALUES ('$kdKelas','$txtKelas')";
		mysql_query($sqlSimpan, $koneksiDbs)  or die ("Query simpan salah : ".mysql_error());
	
		// Panggil lagi formnya
		echo "<meta http-equiv='refresh' content='0; url=kelasTampil.php'>";
	}
	else{
		// Jika ada error, data yang sudah diisi disimpan ke form
		include_once "kelasTambah.php";
		
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