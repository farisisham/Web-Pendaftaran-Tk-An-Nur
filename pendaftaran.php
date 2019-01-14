<?php
include_once "librari/inc.koneksidb.php";
include_once "librari/inc.librari.php";

$noDaftar	= buatKode("pendaftaran", date('y'));


$dataNoDaftar	= isset($_POST['txtNoDaftar']) ? $_POST['txtNoDaftar'] : '';
$dataNoNik	= isset($_POST['txtNoNik']) ? $_POST['txtNoNik'] : '';
$dataNama		= isset($_POST['txtNama']) ? $_POST['txtNama'] : '';
$dataKelamin	= isset($_POST['cmbKelamin']) ? $_POST['cmbKelamin'] : '';
$dataAgama		= isset($_POST['cmbAgama']) ? $_POST['cmbAgama'] : '';
$dataGDarah		= isset($_POST['cmbGDarah']) ? $_POST['cmbGDarah'] : '';
$dataNoTelp		= isset($_POST['txtNoTelp']) ? $_POST['txtNoTelp'] : '';
$dataEmail		= isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
$dataAlamat		= isset($_POST['txtAlamat']) ? $_POST['txtAlamat'] : '';
$dataTmpLahir	= isset($_POST['txtTmpLahir']) ? $_POST['txtTmpLahir'] : '';
$dataTglLahir	= isset($_POST['cmbTglLahir']) ? $_POST['cmbTglLahir'] : '';
$dataBlnLahir	= isset($_POST['cmbBlnLahir']) ? $_POST['cmbBlnLahir'] : '';
$dataThnLahir	= isset($_POST['cmbThnLahir']) ? $_POST['cmbThnLahir'] : '';

$dataNmAyah		= isset($_POST['txtNmAyah']) ? $_POST['txtNmAyah'] : '';
$dataPkAyah	= isset($_POST['cmbPekerjaanAyh']) ? $_POST['cmbPekerjaanAyh'] : '';
$dataNmIbu		= isset($_POST['txtNmIbu']) ? $_POST['txtNmIbu'] : '';
$dataPkIbu	= isset($_POST['cmbPekerjaanIbu']) ? $_POST['cmbPekerjaanIbu'] : '';
$dataPengOrtu = isset($_POST['cmbPenghasilanOrtu'])? $_POST['cmbPenghasilanOrtu'] : '' ;

?>
<html>
<head>
<center><h1 style="background-color:blue; color:white" >PENDAFTARAN CALON SISWA BARU</h1></center>

<style>
body{background-image:url(images/formulir.jpg); background-size:cover}
#test{padding:20px}
h1{text-align:center; color:#FFF}
p{margin-bottom:10px; color:#FFF}
</style>

</head>
<center>
<body>
<form action="pendaftaran_proses.php" method="post" name="post" enctype="multipart/form-data" target="_self">
<table width="60%" border="3" cellpadding="3" cellspacing="1">
  <tr>
    <td ><b>No Pendaftaran </b></td>
    <td ><b>:</b></td>
    <td ><input name="txtNoDaftar" type="text" value="<?php echo $noDaftar; ?>" size="10" maxlength="8" readonly="readonly">    </td>
  </tr>
  <tr>
    <td ><b>NIK</b></td>
    <td ><b>:</b></td>
    <td ><input name="txtNoNik" type="text" id="txtNoNik" value="<?php echo $dataNoNik; ?>" size="60" maxlength="60">    </td>
  </tr>
  <tr>
    <td ><b>Nama Lengkap </b></td>
    <td ><b>:</b></td>
    <td ><input name="txtNama" type="text" value="<?php echo $dataNama; ?>" size="60" maxlength="100"></td>
  </tr>
  <tr>
    <td ><b>Jenis Kelamin </b></td>
    <td ><b>:</b></td>
    <td ><select name="cmbKelamin">
      <option value="BLANK">....</option>
      <?php
		   $pilihan = array("P" => "Perempuan", "L" =>"Laki-laki");
          foreach ($pilihan as $indek => $data) {
            if ($dataKelamin==$indek) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$indek' $cek>$data</option>";
          }
          ?>
    </select></td>
  </tr>
  <tr>
    <td ><b>Agama</b></td>
    <td ><b>:</b></td>
    <td ><select name="cmbAgama">
      <option value="BLANK">....</option>
      <?php
		   $pilihan = array("Islam","Kristen","Katolik","Hindu","Budha");
          foreach ($pilihan as $agama) {
            if ($dataAgama==$agama) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$agama' $cek>$agama</option>";
          }
          ?>
    </select></td>
  </tr>
  <tr>
    <td ><b>Golongan Darah </b></td>
    <td ><b>:</b></td>
    <td ><select name="cmbGDarah">
      <option value="BLANK">....</option>
      <?php
		   $pilihan = array("A","B","AB","O");
          foreach ($pilihan as $gdarah) {
            if ($dataGDarah==$gdarah) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$gdarah' $cek>$gdarah</option>";
          }
          ?>
    </select></td>
  </tr>
  <tr>
    <td ><b>No Telepon </b></td>
    <td ><b>:</b></td>
    <td ><input name="txtNoTelp" type="text" value="<?php echo $dataNoTelp; ?>" size="60" maxlength="25"></td>
  </tr>
  <tr>
    <td ><b>E-Mail</b></td>
    <td ><b>:</b></td>
    <td ><input name="txtEmail" type="text" value="<?php echo $dataEmail; ?>" size="60" maxlength="100"></td>
  </tr>
  <tr>
    <td ><b>Alamat Lengkap </b></td>
    <td ><b>:</b></td>
    <td ><input name="txtAlamat" type="text" value="<?php echo $dataAlamat; ?>" size="60" maxlength="100"></td>
  </tr>
  <tr>
    <td ><b>Tanggal Lahir </b></td>
    <td ><b>:</b></td>
    <td ><select name="cmbTglLahir">
      <option value="BLANK">....</option>
      <?php 
			for ($tgl = 1; $tgl <= 31; $tgl++) {
				if($tgl==$dataTglLahir) { $cek=" selected";} else { $cek="";}
	        	echo "<option value='$tgl' $cek>$tgl</option>";
			}
		?>
    </select>
      /
      <select name="cmbBlnLahir">
        <option value="BLANK">....</option>
        <option value="01">Januari</option>
        <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
      </select>
      /
      <select name="cmbThnLahir">
        <option value="BLANK">....</option>
        <option value="01">2010</option>
        <option value="02">2011</option>
        <option value="03">2012</option>
        <option value="04">2013</option>
        <option value="05">2014</option>
        <option value="06">2015</option>
        <option value="07">2016</option>
        <option value="08">2017</option>
			}
		?>
      </select></td>
  </tr>
  <tr>
    <td ><b>Tempat Lahir </b></td>
    <td ><b>:</b></td>
    <td ><input name="txtTmpLahir" type="text" value="<?php echo $dataTmpLahir; ?>" size="60" maxlength="100"></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td ><b>Nama Ayah </b></td>
    <td ><b>:</b></td>
    <td ><input name="txtNmAyah" type="text" value="<?php echo $dataNmAyah; ?>" size="60" maxlength="100"></td>
  </tr>
  <tr>
    <td ><b>Pekerjaan Ayah </b></td>
    <td ><b>:</b></td>
    <td ><select name="cmbPekerjaanAyh">
      <option value="BLANK">....</option>
      <?php
		   $pilihan = array("Pegawai Negri Sipil (PNS)", "Karyawan", "Buruh", "Wiraswasta", "Lainnya");
          foreach ($pilihan as $pekerjaan) {
            if ($dataPkAyah==$pekerjaan) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$pekerjaan' $cek>$pekerjaan</option>";
          }
          ?>
    </select></td>
  </tr>
  <tr>
    <td ><b>Nama Ibu </b></td>
    <td ><b>:</b></td>
    <td ><input name="txtNmIbu" type="text" value="<?php echo $dataNmIbu; ?>" size="60" maxlength="100"></td>
  </tr>
  <tr>
    <td ><b>Pekerjaan Ibu </b></td>
    <td ><b>:</b></td>
    <td ><select name="cmbPekerjaanIbu">
      <option value="BLANK">....</option>
      <?php
		   $pilihan = array("Pegawai Negri Sipil (PNS)", "Karyawan", "Buruh", "Wiraswasta", "Ibu Rumah Tangga (IRT)", "Lainnya");
          foreach ($pilihan as $pekerjaan) {
            if ($dataPkIbu==$pekerjaan) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$pekerjaan' $cek>$pekerjaan</option>";
          }
          ?>
    </select></td>
  </tr>
  <tr>
    <td ><strong>Penghasilan Orang Tua </strong></td>
    <td ><b>:</b></td>
    <td ><select name="cmbPenghasilanOrtu">
	<option value="BLANK">....</option>
	<?php
		$pilihan = array("0 - 1000000", "1000000 - 2500000", "2500000 - 4000000", " > 4000000");
		foreach ($pilihan as $penghasilan) {
			if ($dataPengOrtu==$penghasilan) {
				$cek="selected";
			} else { $cek =""; }
			echo "<option value='$penghasilan' $cek>$penghasilan</option>";
		}
		?>
	</select></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td ><b>Kelas Pilihan </b></td>
    <td ><b>:</b></td>
    <td ><select name="cmbKelasPil">
      <option value="BLANK">....</option>
      <?php
	
	$sql 	= "SELECT * FROM kelas ORDER BY kd_kelas";
	$query	= mysql_query($sql, $koneksiDbs) or die ("Query salah : ".mysql_error());
	while($data = mysql_fetch_array($query)) {
		if($data['kd_kelas']==$dataKelas) { $cek=" selected"; } else { $cek=""; }
	  	echo "<option value='$data[kd_kelas]' $cek>$data[nm_kelas]</option>";
	} ?>
    </select>    </td>
  </tr>
  <tr>
    <td ><b>Foto</b></td>
    <td ><b>:</b></td>
    <td ><input name="namaFile" type="file" size="50" /></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td bgcolor="#9400D3"><center><input name="btnSave" type="submit" value=" Simpan "></center></a></td>

    
  </tr>
</table>
<fieldset><legend><h2><b><font color="black">Note: </b></h2></legend></font>
 <font color="red"><strong><p>*Calon siswa yang mendaftar pada bulan Maret s.d April akan menjadi pendaftar gelombang 1 </p>
 <p> (Tidak dipungut biaya pendaftaran sebesar Rp.100.000)</p>
 <p>*Calon siswa yang mendaftar pada bulan Mei s.d Juni akan menjadi pendaftar gelombang 2 </p>
 <p> (Dipungut biaya pendaftaran sebesar Rp.100.000) </p></strong></font>
</form>
</div>
</body>
</center>
</fieldset>
</body>
</head>
</html>

