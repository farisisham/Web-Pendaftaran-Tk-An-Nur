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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daftar Kelas</title>
</head>
<body>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <td align="left"><button type="button" onclick="javascript:history.back()"><span ></span> Kembali</button></td>
  <br>&nbsp;</br>
<h1 align="center"> DAFTAR KELAS	</h1>
<table width="420" border="1" align="center" cellpadding="2" cellspacing="1">
  <tr>
    <td width="27" bgcolor="#CCCCCC"><center><strong>No</strong></center></td>
    <td width="57" bgcolor="#CCCCCC"><center><strong>Kode</strong></center></td>
    <td width="198" bgcolor="#CCCCCC"><center><strong>Kelas</strong></center></td>
    <td width="117" align="center" bgcolor="#CCCCCC"><center><strong>Aksi</strong></center></td>
  </tr>
<?php
include_once "../librari/inc.koneksidb.php";
$sql = "SELECT * FROM kelas ORDER BY kd_kelas";
$query = mysql_query($sql, $koneksiDbs) or die ("Query kelas salah : ".mysql_error());
$nomor  = 0; 
while ($data = mysql_fetch_array($query)) {
$nomor++;
?>
  <tr>
    <td> <center><?php echo $nomor; ?></center> </td>
    <td> <center><?php echo $data['kd_kelas']; ?></center> </td>
    <td> <center><?php echo $data['nm_kelas']; ?></center> </td>
    <td align="center">
	<a href="kelasUbah.php?Kode=<?php echo $data['kd_kelas']; ?>" target="_self"></a><a href="kelasUbah.php?Kode=<?php echo $data['kd_kelas']; ?>">Ubah</a> | 
	<a href="kelasHapus.php?Kode=<?php echo $data['kd_kelas']; ?>" target="_self" ></a><a href="kelasHapus.php?Kode=<?php echo $data['kd_kelas']; ?>" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA USER INI ... ?')">Hapus</a></td>
  </tr>
<?php } ?>
</table>
</body>
</html>
