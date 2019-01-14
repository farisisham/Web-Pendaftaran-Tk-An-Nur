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
include_once "../librari/inc.koneksidb.php";
include_once "../librari/inc.librari.php";

$dataKode	= buatKode("kelas","K");
$dataKelas= isset($_POST['txtKelas']) ? $_POST['txtNoDaftar'] : '';
?>
<html>
<head>
<title>Tambah Data Kelas</title>
</head>
<body>
<br>&nbsp;</br>
  <br>&nbsp;</br>
  <br>&nbsp;</br>
  <td align="left"><button type="button" onclick="javascript:history.back()"><span ></span> Kembali</button></td>
  <br>&nbsp;</br>
<center><form action="kelasTambahSave.php" method="post" name="form1" target="_self">
  <table width="700" border="1" cellspacing="1" cellpadding="3">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><center><strong>TAMBAH KELAS </strong></center></td>
    </tr>
    <tr>
      <td width="110">Kode Kelas</td>
      <td width="5"><strong>:</strong></td>
      <td width="363"><input name="txtKode" type="text" value="<?php echo $dataKode; ?>" size="8" maxlength="6" /></td>
    </tr>
    <tr>
      <td>Nama Kelas </td>
      <td><strong>:</strong></td>
      <td><input name="txtKelas" type="text" value="<?php echo $dataKelas; ?>" size="50" maxlength="60" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="tbSave" type="submit" id="tbSave" value="Simpan" /></td>
    </tr>
  </table>
  </form>
  </center>
</form>
</body>
</html>
