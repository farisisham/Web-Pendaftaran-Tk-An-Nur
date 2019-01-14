<?php
include_once "librari/inc.koneksidb.php";
include_once "librari/inc.librari.php";

if($_POST) {
	
	$message = array();
	if(trim($_POST['txtNoNik'])=="") {
		$message[] = "<b>NIK</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['txtNama'])=="") {
		$message[] = "<b>Nama Lengkap</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['cmbKelamin'])=="BLANK") {
		$message[] = "<b>Jenis Kelamin</b> belum dipilih !";		
	}
	if(trim($_POST['cmbAgama'])=="BLANK") {
		$message[] = "<b>Agama</b> belum dipilih !";		
	}
	if(trim($_POST['cmbGDarah'])=="BLANK") {
		$message[] = "<b>Golongan Darah</b> belum dipilih !";		
	}
	if(trim($_POST['txtNoTelp'])=="") {
		$message[] = "<b>No Telpon</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['txtEmail'])=="") {
		$message[] = "<b>Alamat E-Mail</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['txtAlamat'])=="") {
		$message[] = "<b>Alamat Tinggal</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['txtTmpLahir'])=="") {
		$message[] = "<b>Tempat Lahir</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['txtNmAyah'])=="") {
		$message[] = "<b>Nama Ayah</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['cmbPekerjaanAyh'])=="BLANK") {
		$message[] = "<b>Pekerjaan Ayah</b> belum dipilih !";		
	}
	if(trim($_POST['txtNmIbu'])=="") {
		$message[] = "<b>Nama Ibu</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($_POST['cmbPekerjaanIbu'])=="BLANK") {
		$message[] = "<b>Pekerjaan Ibu</b> belum dipilih !";	
	}
	if(trim($_POST['cmbPenghasilanOrtu'])=="BLANK") {
		$message[] = "<b>Penghasilan Orang Tua</b> belum dipilih !";		
	}
	if(trim($_POST['cmbKelasPil'])=="BLANK") {
		$message[] = "<b>Kelas Pilihan</b> belum dipilih !";		
	}

	
		
	$txtNoDaftar	= $_POST['txtNoDaftar'];
	$txtNoNik		= $_POST['txtNoNik'];
	$txtNama		= $_POST['txtNama'];
	$cmbKelamin		= $_POST['cmbKelamin'];
	$cmbAgama		= $_POST['cmbAgama'];
	$cmbGDarah		= $_POST['cmbGDarah'];
	$txtNoTelp		= $_POST['txtNoTelp'];
	$txtEmail		= $_POST['txtEmail'];
	$txtAlamat		= $_POST['txtAlamat'];
	$txtTmpLahir	= $_POST['txtTmpLahir'];
	$cmbTglLahir	= $_POST['cmbTglLahir'];
	$cmbBlnLahir	= $_POST['cmbBlnLahir'];
	$cmbThnLahir	= $_POST['cmbThnLahir'];
	
	$txtNmAyah		= $_POST['txtNmAyah'];
	$cmbPekerjaanAyh= $_POST['cmbPekerjaanAyh'];
	$txtNmIbu		= $_POST['txtNmIbu'];
	$cmbPekerjaanIbu= $_POST['cmbPekerjaanIbu'];
	$cmbPenghasilanOrtu= $_POST['cmbPenghasilanOrtu'];
	$cmbKelasPil	= $_POST['cmbKelasPil'];
	
	
		if (! empty($_FILES['namaFile']['tmp_name'])) {
	
			$file_foto = $_FILES['namaFile']['name'];
			$file_foto = stripslashes($file_foto);
			$file_foto = str_replace("'","",$file_foto);
			
			$noDaftar	= buatKode("pendaftaran",  date('y'));
			$file_foto = $noDaftar.".".$file_foto;
				copy($_FILES['namaFile']['tmp_name'],"admin/foto/".$file_foto);
		 }
		else {
			// Jika tidak ada foto/gambar
			$file_foto = "";
		}
	
	if(count($message)==0){			
		$noDaftar	= buatKode("pendaftaran",  date('y'));
		$tanggalLHR	= $cmbThnLahir."-".$cmbBlnLahir."-".$cmbTglLahir;
		$tanggalDTR	= date('Y-m-d'); 
		
	
		$sqlSave	= "INSERT INTO pendaftaran ( 
								no_pendaftaran,
								kd_kelas,
								nik,
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
								tgl_daftar,
								status,
								foto
								)
							VALUES ( 
									'$noDaftar', '$cmbKelasPil', 
									'$txtNoNik', '$txtNama', 
									'$cmbKelamin', '$cmbAgama', 
									'$cmbGDarah', '$txtNoTelp', 
									'$txtEmail', '$txtAlamat', 
									'$tanggalLHR', '$txtTmpLahir', 
									'$txtNmAyah', '$cmbPekerjaanAyh', 
									'$txtNmIbu', '$cmbPekerjaanIbu',
									'$cmbPenghasilanOrtu', 
									'$tanggalDTR',
									'Daftar',
									'$file_foto'
									)";						
		
		$qrySave	= mysql_query($sqlSave, $koneksiDbs) or die ("Gagal query".mysql_error());
		if($qrySave){
			echo "<script>alert('Berhasil');</script>";
			echo "<script>document.location='index.html';</script>";
			
		}
		exit;
	}	
	else{
		
	
		echo "<div class='mssgBox'>";
		echo "<img src='images/warning2.jpg'><br><hr>";
			$Num=0;
			foreach ($message as $indeks=>$pesan_tampil) { 
			$Num++;
				echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
			} 
		echo "</div> <br>"; 		

		
		include "pendaftaran.php";
	}
}
else {
	include "pendaftaran.php";
}
?>