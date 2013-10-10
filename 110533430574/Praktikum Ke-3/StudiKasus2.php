<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> <!--fungsi DOCTYPE adalah untuk memudahkan browser untuk menampilkan suatu halaman web dengan benar-->
<html xmlns="http://www/w3.org/1999/xhtml" xml:lang="en" lang="en">

<head> <!-- tag head digunakan untuk menyatakan informasi mengenai dokumen html-->
	<title>Data Checkbox</title> <!--tag title digunakan untuk menambahkan title di title bar browser-->
</head>

<body> <!--tag body digunakan untuk mealingkupi semua teks yang terdapat di halaman html-->
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> <!-- tag form digunakan untuk membuat suatu form HTML yang memiliki atribut method bernilai post-->
		Hobby <br />
		<input type="checkbox" name="hobby[]" value="Membaca"  <!-- input digunakan sebagai isian informasi dari user, nilai dari atribut type yang digunakan adalah checkbox-->
		<?php
			if($_POST['hobby[]']="Membaca"){
				echo 'checked="checked"';
			}
		?>		
		/>Membaca <br /> <!--berfungsi untuk memeriksa apakah yang dipilih "Membaca"-->
		
		<input type="checkbox" name="hobby[]" value="Olahraga"  
		<?php
			if($_POST['hobby[]']="Olahraga"){
				echo 'checked="checked"';
			}
		?>		
		/>Olahraga <br /> <!--berfungsi untuk memeriksa apakah yang dipilih "Olahraga"-->
		
		<input type="checkbox" name="hobby[]" value="Menyanyi"  
		<?php
			if($_POST['hobby[]']="Menyanyi"){
				echo 'checked="checked"';
			}
		?>		
		/>Menyanyi <br /> <!--berfungsi untuk memeriksa apakah yang dipilih "menyanyi"-->

		<input type="submit" value="ok" />
	</form>
<?php
	// Ekstraksi nilai
	if (isset($_POST['hobby'])) {
		foreach ($_POST['hobby'] as $key => $val) {
		echo $key . ' -> ' .$val . '<br />';
		}
	}
?>
</body>
</html>