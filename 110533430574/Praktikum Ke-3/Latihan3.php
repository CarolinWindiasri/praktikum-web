<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> <!-- DOCTYPE berfungsi untuk memudahkan browser untuk menampilkan suatu halaman web dengan benar-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> <!-- tag head digunakan untuk menyatakn informasi mengenai dokumen html-->
	<title>Identifikasi Metode</title> <!-- tag title digunakan untuk menambahkan title bar browser -->
</head>

<body> <!-- digunakan untuk melingkupi semua teks yang terdapat di halaman HTML-->

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<input type="text" name="nama" /> <br />

<input type ="submit" value="OK" />
</form>

<?php
if (isset($_REQUEST['nama'])) {
	echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
}
?>

</body>
</html>
 