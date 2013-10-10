<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> <!-- tag head digunakan untuk menyatakn informasi mengenai dokumen html-->
	<title>Metode GET</title> <!-- tag title digunakan untuk menambahkan title bar browser -->
</head>

<body> <!-- digunakan untuk melingkupi semua teks yang terdapat di halaman HTML-->

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> 
Nama
<input type="text" name="nama" /> <br />

<input type ="submit" value="OK" />
</form>

<?php
if (isset($_GET['nama'])) { //fungsi isset() digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variabel akan mengembalikan nilai true, sebaliknya akan bernilai false sedangkan superglobal $_GET digunakan untuk mendapatkan nilai variabel.
	echo 'Hallo, ' . $_GET['nama']; // echo() berfungsi untuk menampilkan satu atau lebih data string kedalam internet browser
}
?>

</body>
</html>
 