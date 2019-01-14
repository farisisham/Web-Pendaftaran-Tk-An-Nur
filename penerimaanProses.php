<?php
include_once "../librari/inc.koneksidb.php";
include_once "../librari/inc.librari.php";

if($_GET) {
if(isset($_GET['noDaftar'])) {
	# Tampilkan data diri pendaftar / calon siswa
	$noDaftar	= $_GET['noDaftar'];
	
	# Cek apakah Data Calon Besangkutan sudah masuk ke daftar Siswa Baru
	$cekSql		= "SELECT * FROM siswa WHERE no_pendaftaran='$noDaftar'";
	$cekQuery	= mysql_query($cekSql, $koneksiDbs) or die ("Gagal query".mysql_error());
	if(mysql_num_rows($cekQuery) >= 1) {
		// Jika datanya sudah ada (sudah diterima), redirek ke halaman tampil
		echo "<meta http-equiv='refresh' content='0; url=penerimaanTampil.php'>";
		exit;
	}
	
	# Membaca data calon siswa dari tabel pendaftaran
	$sql		= "SELECT * FROM pendaftaran WHERE no_pendaftaran='$noDaftar'";
	$query		= mysql_query($sql, $koneksiDbs) or die ("Gagal query".mysql_error());
	$data		= mysql_fetch_array($query);

	// SQL Simpan data calon (pendaftar) ke tabel siswa (karna resmi diterima/ sudah registrasi ulang)
	$noSiswa	= buatKode("siswa", date('y'));
	$thnAngkatan= date('Y');
	$sqlSave	= "INSERT INTO siswa ( 
							no_siswa,
							tahun_angkatan,
							kd_kelas,
							nama,
							jkelamin,
							agama,
							gdarah,
							telepon,
							email,
							alamat,
							tgl_lahir,
							tmpt_lahir,
							ayah_nama,
							ayah_pekerjaan,
							ibu_nama,
							ibu_pekerjaan,
							penghasilan,
							foto,
							no_pendaftaran
							)
						VALUES ( 
								'$noSiswa','$thnAngkatan',
								'$data[kd_kelas]', '$data[nama]', 
								'$data[jkelamin]', '$data[agama]', 
								'$data[gdarah]', '$data[telepon]', 
								'$data[email]', '$data[alamat]', 
								'$data[tgl_lahir]', '$data[tmpt_lahir]', 
								'$data[ayah_nama]', '$data[ayah_pekerjaan]', 
								'$data[ibu_nama]', '$data[ibu_pekerjaan]', 
								'$data[penghasilan]', '$data[foto]', 
								'$noDaftar'
								)";	 	
	// Query menjalankan SQL Insert di atas
	$qrySave	= mysql_query($sqlSave, $koneksiDbs) or die ("Gagal query".mysql_error());
	if($qrySave){
		echo "<meta http-equiv='refresh' content='0; url=siswaTampil.php'>";
	}
	exit;
}
}
?>