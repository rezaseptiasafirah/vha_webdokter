<?php require_once("koneksi.php"); ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title>Virtual Health Assistant | Web dokter</title>
</head>

<body>
	<header>
		<h3>pasien yang terdaftar</h3>
	</header>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Nama</th>
		</tr>
	</thead>
	</tbody>

	
		<?php
$sql = "SELECT * FROM nomor_urut ORDER BY nomor DESC LIMIT 0,1";
$query = mysql_query($sql);
 
while ($data = mysql_fetch_array($query)) {
 
echo "<table border='1'>";
echo "<tr><td>$data[nomor]</td><td>$data[nama]</td></tr>";			
echo "</table>";
 
}
 
?>

</tbody>
	</table>

	</body>
</html>