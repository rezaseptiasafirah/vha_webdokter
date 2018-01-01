<html>
<head>
  <title>Riwayat pasien</title>
</head>
<body>
  <h1>riwayat pasien</h1>
  
  <table border="1" width="100%">
  <tr>
    
    <th>Nama pasien</th>
    <th>Riwayat penyakit</th>
 
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  
  
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['nama_pasien']."</td>";
    echo "<td>".$data['riwayat penyakit']."</td>";
	echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>
