<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> <!-- DOCTYPE berfungsi untuk memudahkan browser untuk menampilkan suatu halaman web dengan benar-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> <!-- tag head digunakan untuk menyatakn informasi mengenai dokumen html-->
	<title>Prefill Data Radio Button</title> <!-- tag title digunakan untuk menambahkan title bar browser -->
</head>

<body> <!-- digunakan untuk melingkupi semua teks yang terdapat di halaman HTML-->

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin
<input type="radio" name="sex" value="Pria" checked
<?php
if ($_POST['sex'] == 'Pria') {
	echo 'checked="checked"';
}
?>
/>Pria
<input type="radio" name="sex" value="Wanita" 
<?php
if ($_POST['sex'] == 'Wanita') {
	echo 'checked="checked"';
}
?>	
/>Wanita <br />

<input type ="submit" value="ok" />
</form>

<?php
if (isset($_POST['sex'])) {
	echo $_POST['sex'];
}
?>

</body>

</html>
 