<?php
session_start(); 
include_once "login_session.php";
include_once "../librari/inc.koneksidb.php";
include_once "../librari/inc.librari.php";

if($_GET) {
	$sql = "SELECT * FROM kelas WHERE kd_kelas='".$_GET['Kode']."'";
	$query = mysql_query($sql, $koneksiDbs) or die ("Query kelas salah : ".mysql_error()); 
	$data = mysql_fetch_array($query); 
	
	// Masukkan data dari database ke variabel
	$txtKode 	= $data['kd_kelas']; 
	$txtKelas	= $data['nm_kelas'];
}
?>
<html>
<head>
<title>Ubah Data Kelas</title>
</head>
<body> 
<form action="kelasUbahSave.php" method="post" name="form1" target="_self">
  <table width="500" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><b>EDIT KELAS</b></td>
    </tr>
    <tr>
      <td width="108">Kode Kelas</td>
      <td width="377">: 
      <input name="txtKode" type="text" value="<?php echo $txtKode; ?>" size="8" maxlength="6" /></td>
    </tr>
    <tr>
      <td>Nama Kelas</td>
      <td>: 
      <input name="txtKelas" type="text" value="<?php echo $txtKelas; ?>" size="40" maxlength="60" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="tbSimpan" value="Simpan" /></td>
    </tr>
  </table>
</form>
</body>
</html>


