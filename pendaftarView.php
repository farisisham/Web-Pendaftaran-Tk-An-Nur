<?php
session_start(); 
include_once "login_session.php";
include_once "../librari/inc.koneksidb.php";
include_once "../librari/inc.librari.php";

if($_GET) {
	$noDaftar	= $_GET['noDaftar'];
	
	$sql		= "SELECT pendaftaran.*, kelas.nm_kelas FROM pendaftaran, kelas 
				   WHERE pendaftaran.kd_kelas=kelas.kd_kelas AND pendaftaran.no_pendaftaran='$noDaftar'";
	$query		= mysql_query($sql, $koneksiDbs) or die ("Gagal query".mysql_error());
	$data		= mysql_fetch_array($query);
	
	// Status foto
	// Status foto
	if($data['foto'] =="") {
		$namaFoto	= "fotosiswa.png";
	}
	else {
		$namaFoto	= $data['foto'];
	}
}
?>
<html>
<head>
<title>Data Lengkap Calon Siswa</title>
<body bgcolor="#BDB76B">
  <table width="700" border="0" cellpadding="3" cellspacing="1">
    <tr>
      <td colspan="3" bgcolor="#CCFFFF"><center><b>DATA PENDAFTARAN </b></center></td>
    </tr>
    <tr>
      <td width="171"><b>No Pendaftaran </b></td>
      <td width="5"><b>:</b></td>
      <td width="502"><?php echo $data['no_pendaftaran']; ?></td>
    </tr>

    <tr>
      <td><strong>NIK</strong></td>
      <td><b>:</b></td>
      <td><?php echo $data['nik']; ?></td>
    </tr>
    <tr>
      <td><b>Tanggal Daftar</b></td>
      <td><b>:</b></td>
      <td><?php echo $data['tgl_daftar']; ?></td>
    </tr>
    <tr>
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
      <td colspan="3" bgcolor="#CCFFFF"><center><b>Data Orang Tua </b></center></td>
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
      <td><b>Penghasilan Orang Tua </b></td>
      <td><b>:</b></td>
      <td><?php echo $data['penghasilan']; ?></td>
    </tr>
    <tr>
      <td><b>Kelas Pilihan </b></td>
      <td><b>:</b></td>
      <td><b><?php echo $data['nm_kelas']; ?></b></td>
    </tr>
    <tr>
      <td><strong>Foto</strong></td>
      <td><b>:</b></td>
      <td> <img src="../admin/foto/<?php echo $namaFoto; ?>" width="161" height="221">    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><form action="pendaftarProses.php" method="post" name="form1" target="_self">
        <input name="txtNoPendaftaran" type="hidden" value="<?php echo $noDaftar; ?>">
        <input name="btnDiterima" type="submit" value=" Diterima Sebagai Siswa Baru ">
		    <a href="delete.php?no_pendaftaran=<?php echo $data['no_pendaftaran']; ?>" target="_self" alt="Delete" onClick="return confirm('ANDA YAKIN INGIN MENGHAPUS DATA PENTING INI ... ?')">Tidak Diterima dan Hapus Data </a></td>
      </form>      </td>
    </tr>
  </table>
  <p><b>Note: </b></p>
  <ul>
    <li>Klik tombol <b>Diterima</b> jika peserta pendaftar <b>diterima sebagai calon siswa baru</b>.</li>
    <li> Klik tombol <b>Tidak Ditermia</b> jika peserta pendaftar <b>tidak diterima sebagai calon siswa baru</b>. </li>
  </ul>
</body>
</html>
