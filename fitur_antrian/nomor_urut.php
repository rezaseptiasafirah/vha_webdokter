<?php 
 
require_once("koneksi.php");
 
function nomor() {
	$sql = "SELECT nomor FROM nomor_urut ORDER BY nomor DESC LIMIT 0,1";
	$query = mysql_query($sql);
	list ($no_temp) = mysql_fetch_row($query);
 
	if ($no_temp == '') {
		$no_urut = 'A00001';
		
		} else {
		$jum = substr($no_temp,1,6);
		$jum++;
		if($jum <= 9) {
			$no_urut = 'A0000' . $jum;
		} elseif ($jum <= 99) {
			$no_urut = 'A000' . $jum;} elseif ($jum <= 999) {
			$no_urut = 'A00' . $jum;
		} elseif ($jum <= 9999) {
			$no_urut = 'A0' . $jum;
		} elseif ($jum <= 99999) {
			$no_urut = 'A' . $jum; 	
		} else {
			die("Nomor urut melebih batas");		
		}
	}
		return $no_urut;
}
 
$nomor = nomor();
 
?>
 
<form align="center" action="" method="post">
<p><input type="text" name="nomor" size="6" value="<?php echo $nomor; ?>"></p><p><input type="text" name="nama" size="50" placeholder="Nama" required></p>
<p><input type="submit" name="submit" value="Submit"></p>
</form>
 
<?php
if (isset($_POST['submit'])){
	if($_POST['submit']) {
	$sql = "INSERT INTO nomor_urut (nomor,nama) VALUES ('$nomor','$_POST[nama]')";
	$query = mysql_query($sql);
	}
	if (!$query){
		die ('Gagal menambahkan data' . mysql_error());
	} else {
		echo "<script>alert(\"Data User Berhasil Ditambahkan!\");</script>";
		echo "<meta http-equiv='refresh' content='1;URL=daftar.php'>";
	}
}
?>