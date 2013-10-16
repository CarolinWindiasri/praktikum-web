<!DOCTYPE html>  <!-- DOCTYPE berfungsi untuk memudahkan browser untuk menampilkan suatu halaman web dengan benar-->
<html>
	<head> <!-- tag head digunakan untuk menyatakn informasi mengenai dokumen html-->
		<title>Operator Aritmatika Pada PHP</title> <!-- tag title digunakan untuk menambahkan title bar browser -->
	</head>
<body> <!-- digunakan untuk melingkupi semua teks yang terdapat di halaman HTML-->

<h1>Hitung Aritmatika</h1>
<body bgcolor="pink"> <!-- digunakan untuk memberi warna background-->
<form method="post"> <!-- dipakai untuk pembuatan form dalam html,fungsi method menentukan bagaimana data akan dikirim ke server.sedangkan post yaitu data akan dikirim ke server sebagai block data ke script. -->

<table> 
	<tr>
		<td align="center"><b>Angka 1<b></td>
		<td><b>Operator</b></td>
		<td align="center"><b>Angka 2<b></td>
	</tr>
	<tr>
		<td><input type="number" name="angka1" value="" required placeholder= "Masukkan Angka"/></td> <!-- fungsi dari required untuk memvalidasi dan memberi peringatan apakah masih ada inputan yang kosong, sedangkan placeholder digunakan untuk menampilkan nilai pengganti dari  value pada inputan. -->
		<td align="center"><select name="operator">
		<option></option>
		<option value ="+">+</option> <!-- digunakan untuk operator penambahan -->
		<option value ="-">-</option> <!-- digunakan untuk operator pengurangan-->
		<option value ="*">*</option> <!-- digunakan untuk operator perkalian -->
		<option value ="/">/</option> <!-- digunakan untuk operator pembagian -->
		</select></td>
		<td><input type="number" name="angka2" value="" required placeholder= "Masukkan Angka"/></td>
		<td>=</td>

		<?php
			if(isset($_POST['angka1']) or isset($_POST['angka2']) ){ /*fungsi Isset digunakan untuk menyatakan apakah variable nilai 1 dan 2 tersebut sudah diset atau belum*/
			$angka1 = $_POST['angka1'];  /* $_POST berfungsi untuk mengembalikan angka 1*/
			$angka2 = $_POST['angka2'];  /* $_POST berfungsi untuk mengembalikan angka 1*/
			}else{
			$angka1 = "0";
			$angka2 = "0";
			}
			if(isset($_POST['operator'])){ /*fungsi Isset digunakan untuk menyatakan apakah variable operator tersebut sudah diset atau belum*/
			$operator =$_POST['operator'];
			}else{
			$operator ="";
			}
			switch($operator){ /*fungsi untuk operasi aritmatika*/
			case "+":
				$hasil = $_POST["angka1"] + $_POST["angka2"];
			break;
			case "-":
				$hasil = $_POST["angka1"] - $_POST["angka2"];
			break;
			case "*":
				$hasil = $_POST["angka1"] * $_POST["angka2"];
			break;
			case "/":
				$hasil = $_POST["angka1"] / $_POST["angka2"];
			break;
			}
		?>
		<td><input type="text" name="hasil"  value="<?=$hasil;?>"></td>
		<td><input type="submit" name="Aritmatika" value="Hitung"></td>
	</tr>

</table>
</form>
</body>
</html>