<?php

$koneksi = mysql_connect("localhost","root","")
or die ("Gagal terhubung ke server MySQL");
mysql_select_db("webdokter", $koneksi)
or die ("Gagal terhubung ke database");
?>
