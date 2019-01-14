<?php
session_start();
include_once "../librari/inc.koneksidb.php";	

if($_POST) {
	$message = array();
	if (trim($_POST['txtUser'])=="") {
		$message[] = "Data <b> Username</b>  tidak boleh kosong !";		
	}
	if (trim($_POST['txtPassword'])=="") {
		$message[] = "Data <b> Password </b> tidak boleh kosong !";		
	}
	
	
	$txtUser 	= $_POST['txtUser'];
	$txtPassword= $_POST['txtPassword'];
	
	
	if(count($message)==0){	
		
		$loginSql = "SELECT * FROM user WHERE username='".$txtUser."' AND password='".md5($txtPassword)."'";
		$loginQry = mysql_query($loginSql, $koneksiDbs)  or die ("Query Error : ".mysql_error());
	
		
		if (mysql_num_rows($loginQry) >=1) {
			$loginData = mysql_fetch_array($loginQry);
			
			
			$_SESSION['SES_LOGIN'] = $loginData['username']; 
			
			
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		}
		else {
			 echo "<h2> Login gagal ....</h2>";
		}
	}
	else {
		
		include "login.php";
		
		
		echo "<div class='mssgBox'>";
		echo "<img src='attention2.png'><br><hr>";
			$Num=0;
			foreach ($message as $indeks=>$pesan_tampil) { 
			$Num++;
				echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
			} 
		echo "</div> <br>"; 
	}
}
else {
	include "login.php";
}
?>
 
