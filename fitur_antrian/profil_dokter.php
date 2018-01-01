<html>
<head>
  <title>Profil dokter</title>
</head>
<body>
  <h1>Data dokter</h1>
  
  <table border="1" width="100%">
  <tr>
    <th>Foto</th>
    <th>Nama</th>
    <th>Spesialis</th>
    <th>Jenis kelamin</th>
    <th>tgl lahir</th>
	<th>alamat</th>
	<th>daerah asal</th>
	<th>no telp</th>
	<th>sertifikasi</th>
	<th>ijin praktek</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM siswa"; // Query untuk menampilkan semua data siswa
  
    
  
  ?>
  </table>
</body>
</html>
