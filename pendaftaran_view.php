<?php
include_once "librari/inc.koneksidb.php";
include_once "librari/inc.librari.php";

if($_GET) {
  $noDaftar = $_GET['noDaftar'];
  $sql    = "SELECT pendaftaran.*, kelas.nm_kelas FROM pendaftaran, kelas 
           WHERE pendaftaran.kd_kelas=kelas.kd_kelas AND pendaftaran.no_pendaftaran='$noDaftar'";
  $query    = mysql_query($sql, $koneksiDbs) or die ("Gagal query".mysql_error());
  $data   = mysql_fetch_array($query);
}
?>
<html>
<head>
<title>Data Pendaftaran Calon Siswa</title><body>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
    <tr>
      <td colspan="3"><b><center>DATA PENDAFTARAN </b></center></td>
    </tr>
    <tr>
    <td width="137"><b>No Pendaftaran </b></td>
    <td width="6"><b>:</b></td>
    <td width="536"><?php echo $data['no_pendaftaran']; ?></td>
  </tr>
  <tr>
    <td><b>NIK</b></td>
    <td><b>:</b></td>
    <td><?php echo $data['no_nik']; ?></td>
  </tr>
  <tr>
    <td><b>Nama Lengkap </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['nama']; ?></td>
  </tr>
  <tr>
    <td><b>Jenis Kelamin </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['jkelamin']; ?></td>
  </tr>
  <tr>
    <td><b>Agama</b></td>
    <td><b>:</b></td>
    <td><?php echo $data['agama']; ?></td>
  </tr>
  <tr>
    <td><b>Golongan Darah </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['gdarah']; ?></td>
  </tr>
  <tr>
    <td><b>No Telepon </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['telepon']; ?></td>
  </tr>
  <tr>
    <td><b>E-Mail</b></td>
    <td><b>:</b></td>
    <td><?php echo $data['email']; ?></td>
  </tr>
  <tr>
    <td><b>Alamat Lengkap </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['alamat']; ?></td>
  </tr>
  <tr>
    <td><b>Tanggal Lahir </b></td>
    <td><b>:</b></td>
    <td><?php echo tgl_eng_to_ind($data['tgl_lahir']); ?></td>
  </tr>
  <tr>
    <td><b>Tempat Lahir </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['tmpt_lahir']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><b>Nama Ayah </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['ayah_nama']; ?></td>
  </tr>
  <tr>
    <td><b>Pekerjaan Ayah </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['ayah_pekerjaan']; ?></td>
  </tr>
  <tr>
    <td><b>Nama Ibu </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['ibu_nama']; ?></td>
  </tr>
  <tr>
    <td><b>Pekerjaan Ibu </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['ibu_pekerjaan']; ?></td>
  </tr>
  <tr>
    <td><strong>Penghasilan Orang Tua </strong></td>
    <td><b>:</b></td>
    <td><?php echo $data['penghalisan']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><b>Kelas Pilihan </b></td>
    <td><b>:</b></td>
    <td><?php echo $data['nm_kelas']; ?></td>
  </tr>
</table>
<p><img src="<?php echo $namaFoto; ?>" width="50" height="50"></p>
</body>
</html>
