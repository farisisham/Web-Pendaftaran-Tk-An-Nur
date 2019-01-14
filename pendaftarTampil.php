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
<?php
session_start(); 
include_once "login_session.php";
include_once "../librari/inc.librari.php";
include_once "../librari/inc.koneksidb.php";

$pencarianSQL	= "";
# PENCARIAN DATA 
if(isset($_POST['btnCari'])) {
	$txtKataKunci	= trim($_POST['txtKataKunci']);

	// Menyusun sub query pencarian
	$pencarianSQL	= "WHERE no_pendaftaran='$txtKataKunci' OR nama LIKE '%$txtKataKunci%' ";
}

# Teks pada form
$dataKataKunci = isset($_POST['txtKataKunci']) ? $_POST['txtKataKunci'] : '';

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <td align="left"><button type="button" onclick="javascript:history.back()"><span ></span> Kembali</button></td>
  <br>&nbsp;</br>
<title>Daftar Calon Siswa</title></head>
<body bgcolor="#98FB98">
<center><h2>Daftar Calon Siswa</h2>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
<table width="419" border="0" cellpadding="2" cellspacing="1" class="table-list">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC"><strong><center>PENCARIAN</center></strong></td>
  </tr>
  <tr>
    <td width="152"><strong> (No Daftar / Nama ) </strong></td>
    <td width="13"><b>:</b></td>
    <td width="238"><input name="txtKataKunci" type="text" value="<?php echo $dataKataKunci; ?>" size="25" maxlength="100" />
        <input name="btnCari" type="submit" value=" Cari " /></td>
  </tr>
</table>
<table width="80%" border="1" cellspacing="1" cellpadding="2">
  <tr>
    <td width="28" bgcolor="#CCCCCC"><center><b>No</b></td>
    <td width="70" bgcolor="#CCCCCC"><center><b>No Daftar </b></td>
    <td width="175" bgcolor="#CCCCCC"><center><b>Nama Calon </b></td>
    <td width="31" bgcolor="#CCCCCC"><center><b>Jenis Kelamin</b></td>
    <td width="31" bgcolor="#CCCCCC"><center><b>Tanggal Daftar</b></td>
    <td width="40" align="center" bgcolor="#CCCCCC"><b>View</b></td>
    </center>
  </tr>
<?php
include_once "../librari/inc.koneksidb.php";
include_once "../librari/inc.librari.php";

if(isset($_POST['btnCari'])) {
	$txtCari= $_POST['txtKataKunci'];
	$sql 	= "SELECT * FROM pendaftaran WHERE nama LIKE '%$txtKataKunci%' OR no_pendaftaran LIKE '$txtKataKunci%' ORDER BY no_pendaftaran" ;
}
else {
	$sql   = "SELECT * FROM pendaftaran ORDER BY no_pendaftaran ";
}

$query = mysql_query($sql, $koneksiDbs) or die ("Query salah : ".mysql_error());
$nomor = 0; 
while ($data = mysql_fetch_array($query)) {
$nomor++;

// gradasi warna
		if($nomor%2==1) { $warna=""; } else {$warna="#F5F5F5";}
?>
 <tr bgcolor="<?php echo $warna; ?>">
    <td align="center"> <?php echo $nomor; ?> </td>
    <td align="center"> <?php echo $data['no_pendaftaran']; ?> </td>
    <td align="center"> <?php echo $data['nama']; ?> </td>
    <td align="center"> <?php echo $data['jkelamin']; ?> </td>
    <td align="center"> <?php echo $data['tgl_daftar']; ?> </td>
    <td align="center"> <a href="pendaftarView.php?noDaftar=<?php echo $data['no_pendaftaran']; ?>" target="_self">Lihat</a></td>
  </tr>
  <?php } ?>
</table>
<br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
 <fieldset><legend><h2><b>Note: </b></h2></legend>
 <p>Data diatas adalah daftar calon siswa, Admin dapat mengklik menu <b>View</b> untuk melihat data diri pendaftar </p>
 <p>Jika Admin psb sudah melihat daftar nama calon siswa yang diterima, klik  <b>Lihat</b> lalu pilih<strong> "Diterima Sebagai Siswa Baru". </strong></p>
 <p>Daftar nama siswa yang diterima akan terpampang di halaman Siswa Diterima </p>
 </center>
</body>
</html>
