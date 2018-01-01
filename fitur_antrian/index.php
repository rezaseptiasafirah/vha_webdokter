<!DOCTYPE html>
<html>
<head>
	<title>Virtual Health Assistant | Web dokter</title>
</head>

<body>
	<header>
		<h3>Virtual Health Assistant</h3>
		<h1>Web dokter</h1>
	</header>

	<h4>Menu</h4>
	<nav>
        <?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
<?php endif; ?>
		<ul>
			<li><a href="profil_dokter.php">profil dokter</a></li>
			<li><a href="nomor_urut.php">Daftar Baru</a></li>
			<li><a href="daftar.php">Pendaftar</a></li>
			<li><a href="riwayat.php">riwayat</a></li>
		</ul>
	</nav>

	</body>
</html>