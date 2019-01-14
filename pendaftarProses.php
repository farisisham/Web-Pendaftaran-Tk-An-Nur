<?php
include_once "../librari/inc.koneksidb.php";
include_once "../librari/inc.librari.php";

if($_POST) {

	$noDaftar	= $_POST['txtNoPendaftaran'];
	
	
	if(isset($_POST['btnDiterima'])) {
	
		$sql		= "UPDATE pendaftaran SET status='Diterima' WHERE no_pendaftaran='$noDaftar'";
		mysql_query($sql, $koneksiDbs) or die ("Gagal query".mysql_error());
	
		echo "<meta http-equiv='refresh' content='0; url=penerimaanTampil.php'>";
		exit;
	}
	elseif(isset($_POST['btnTidak'])) {
		
		$sql		= "UPDATE pendaftaran SET status='Ditolak' WHERE no_pendaftaran='$noDaftar'";
		mysql_query($sql, $koneksiDbs) or die ("Gagal query".mysql_error());
	
		echo "<meta http-equiv='refresh' content='0; url=pendaftarTampil.php'>";
		exit;
	}
	else {}
}
?>