<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> <!--fungsi DOCTYPE adalah untuk memudahkan browser untuk menampilkan suatu halaman web dengan benar-->
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head> <!-- tag head digunakan untuk menyatakan informasi mengenai dokumen html-->
	<title>Data Seleksi</title> <!--tag title digunakan untuk menambahkan title di title bar browser-->
</head>

<body> <!--tag body digunakan untuk mealingkupi semua teks yang terdapat di halaman html-->
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Pekerjaan
		<select name="job">
			<option value="Mahasiswa"
			<?php
				if(@$_POST['job'] == "Mahasiswa"){ 
					echo 'selected=selected';
				}
			?>
			>Mahasiswa <!--berfungsi untuk memeriksa apakah yang dipilih "Mahasiswa"-->
			
			<option value="ABRI" 
			<?php
				if(@$_POST['job'] == "ABRI"){ 
					echo 'selected=selected';
				}
			?>
			>ABRI <!--berfungsi untuk memeriksa apakah yang dipilih "ABRI"-->
			
			<option value="PNS" 
			<?php
				if(@$_POST['job'] == "PNS"){ 
					echo 'selected=selected';
				}
			?>
			>PNS <!--berfungsi untuk memeriksa apakah yang dipilih "PNS"-->
			
			<option value="Swasta" 
			<?php
				if(@$_POST['job'] == "Swasta"){ 
					echo 'selected=selected';
				}
			?>
			>Swasta <!--berfungsi untuk memeriksa apakah yang dipilih "Swasta"-->
		</select> <br />
		<input type="submit" value="ok" />
	</form>
<?php
	if (isset($_POST['job'])) {
	echo $_POST['job'];
}
?>
</body>
</html>