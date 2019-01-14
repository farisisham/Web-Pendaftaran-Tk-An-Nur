<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Selamat Datang Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <center><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Beranda</a>
            </li></center>
            <center><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user_add.php">Tambah Admin</a>
            </li></center>
            <center><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="user_data.php">Data Admin</a>
            </li></center>
            <center><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="kelasTambah.php">Tambah Kelas</a>
            </li></center>
            <center><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="kelasTampil.php">Data Kelas</a>
            </li></center>
            <center><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pendaftarTampil.php">Data Pendaftar</a>
            </li></center>
            <center><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="penerimaanTampil.php">Data Siswa Diterima</a>
            </li></center>
            <center><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="siswaTampil.php">Data Siswa Baru</a>
            </li></center>
          </ul>
        </div>
      </div>
    </nav>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <td align="left"><button type="button" onclick="javascript:history.back()"><span ></span> Kembali</button></td>
  <br>&nbsp;</br>
<?php
session_start(); 
include_once "login_session.php";
include_once "../librari/inc.koneksidb.php";


$pencarianSQL	= "";
# PENCARIAN DATA 
if(isset($_POST['btnCari'])) {
	$txtKataKunci	= trim($_POST['txtKataKunci']);

	// Menyusun sub query pencarian
	$pencarianSQL	= " WHERE status='Diterima' AND no_pendaftaran='$txtKataKunci' OR nama LIKE '%$txtKataKunci%' ORDER BY no_pendaftaran ASC ";
}

# Teks pada form
$dataKataKunci = isset($_POST['txtKataKunci']) ? $_POST['txtKataKunci'] : '';


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Penerimaan Siswa Baru</title></head>
<body bgcolor="#00BFFF">
<center>
<h2>Penerimaan Siswa Baru </h2>
<form action= "<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
<table width="500" border="0" cellpadding="2" cellspacing="1" class="table-list">
  <tr>
    <td colspan="3" bgcolor="#F5F5F5"><center><strong>PENCARIAN</strong></center></td>
  </tr>
  <tr>
    <td width="180"><strong> (No Daftar / Nama ) </strong></td>
    <td width="5"><b>:</b></td>
    <td width="260"><input name="txtKataKunci" type="text" value="<?php echo $dataKataKunci; ?>" size="25" maxlength="100" />
        <input name="btnCari" type="submit" value=" Cari " /></td>
  </tr>
</table>
<table width="70%" border="1" cellspacing="1" cellpadding="2">
  <tr>
    <td width="27" bgcolor="#CCCCCC"><center><b>No</b></td>
    <td width="69" bgcolor="#CCCCCC"><center><b>No Daftar </b></td>
    <td width="70" bgcolor="#CCCCCC"><center><b>Nama Calon </b></td>
    <td width="30" bgcolor="#CCCCCC"><center><b>Kelamin</b></td>
    <td width="30" bgcolor="#CCCCCC"><center><b>Tanggal Daftar</b></td>
    <td width="45" align="center" bgcolor="#CCCCCC"><center><b>Aksi</b></td>
    </center>
  </tr>
<?php
include_once "../librari/inc.koneksidb.php";

if(isset($_POST['btnCari'])) {
	$txtKataKunci= $_POST['txtKataKunci'];
	$sql 	= "SELECT * FROM pendaftaran WHERE status='Diterima' AND no_pendaftaran='$txtKataKunci' OR nama LIKE '%$txtKataKunci%' ORDER BY no_pendaftaran ASC";
}
else {
	$sql   = "SELECT * FROM pendaftaran WHERE status='Diterima' ORDER BY no_pendaftaran ASC";
}


$query = mysql_query($sql, $koneksiDbs) or die ("Query salah : ".mysql_error());
$nomor = 0; 
while ($data = mysql_fetch_array($query)) {
$nomor++;
if($nomor%2==1) { $warna=""; } else {$warna="#F5F5F5";}
?>
  <tr>
    <td><center><?php echo $nomor; ?></center></td>
    <td><center><?php echo $data['no_pendaftaran']; ?></center></td>
    <td><center><?php echo $data['nama']; ?></center></td>
    <td><center><?php echo $data['jkelamin']; ?></center></td>
    <td><center><?php echo $data['tgl_daftar']; ?></center></td>
    <td align="center"><strong><a href="penerimaanProses.php?noDaftar=<?php echo $data['no_pendaftaran']; ?>" target="_self">Sudah Daftar Ulang</a></strong></td>
  </tr>
<?php } ?>
</table>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
<fieldset><legend><h2><b>Note: </b></h2></legend>
<p>Jika Calon Siswa sudah melakukan Lapor Diri/Daftar Ulang dengan menyerahkan berkas yang dibutuhkan seperti : Akte Kelahiran, KK, Pas Foto dan telah menyelesaikan administrasi, maka admin harus menekan aksi <strong>Sudah Daftar Ulang</strong> agar data siswa tersebut tercatat kedalam Data Siswa Baru.  </p>
<p>&nbsp;</p>
</form>
</center>
</body>
</html>
