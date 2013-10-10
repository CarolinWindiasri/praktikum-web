<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> <!-- DOCTYPE berfungsi untuk memudahkan browser untuk menampilkan suatu halaman web dengan benar-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head> <!-- tag head digunakan untuk menyatakn informasi mengenai dokumen html-->
	<title>Data Checkbox</title> <!-- tag title digunakan untuk menambahkan title bar browser -->
</head>

<body><!-- digunakan untuk melingkupi semua teks yang terdapat di halaman HTML-->

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin
<input type="checkbox" name="hobby[]" value="Membaca"
/>Membaca

<input type="checkbox" name="hobby[]" value="Olahraga"
/>Olahraga

<input type="checkbox" name="hobby[]" value="Menyanyi"
/>Menyanyi <br />

<input type="submit" value="ok" />
</form>

<?php
//Ekstraksi nilai
if (isset($_POST['hobby'])) {
	foreach ($_POST['hobby'] as $key => $val) {
	echo $key . ' -> ' .$val . '<br />';
}
}
?>

</body>

</html>
 