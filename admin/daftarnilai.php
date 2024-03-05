<html>
<head>
<title> Inputan Data Mahasiswa |Archer.web.id</title>
</head>
<body>
<table align="center" border="1">
<form method="post" action="hasil_input.php">
<h3 align="center"><blink>Input Nilai Mahasiswa</blink></h3>
<tr>
<td>Nama Mahasiswa</td>
<td><input type="text" name="tnama"></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>
<input type="radio" name="jeniskelamin" value="Laki-Laki" /> Laki-Laki
<input type="radio" name="jeniskelamin" value="Perempuan" /> Perempuan
</td>
</tr>
<tr>
<td>Jurusan</td>
<td><select name="jurusan">
<option value>Pilih Jurusan</option>
<option value="Teknik Informatika">S1 (TI)</option>
<option value="Manajemen Informatika">D3 (MI)</option>

</select></td>
</tr>
<tr>
<td>Semester</td>
<td>
<input type="radio" name="semester" value="Semester 1" /> 1
<input type="radio" name="semester" value="Semester 2" /> 2
<input type="radio" name="semester" value="Semester 3" /> 3
<input type="radio" name="semester" value="Semester 4" /> 4
<input type="radio" name="semester" value="Semester 5" /> 5
<input type="radio" name="semester" value="Semester 6" /> 6
<input type="radio" name="semester" value="Semester 7" /> 7
<input type="radio" name="semester" value="Semester 8" /> 8
</td>
</tr>

<tr>
<td>Matakuliah</td>
<td><select name="makul">
<option value>Pilih Matakuliah</option>
<option value="Daspro">Daspro</option>
<option value="logika Algoritma ">logika Algoritma </option>
<option value="Kalkulus">Kalkulus </option>
<option value="Fisika">Fisika </option>
<option value="Agama">Agama </option>
<option value="Pancasila">Pancasila </option>
</select></td>
</tr>
<tr>
<td>Nilai Tugas</td>
<td><input type="text" name="ttugas"></td>
</tr>
<tr>
<td>Nilai Quis</td>
<td><input type="text" name="tquis"></td>
</tr>
<tr>
<td>Nilai UTS</td>
<td><input type="text" name="tuts"></td>
</tr>
<tr>
<td>Nilai Uas</td>
<td><input type="text" name="tuas"></td>
</tr>
<tr>
<td colspan="2">
<div align="left">
<input type="submit" name="proses" value="submit"/>
<input type="reset" name="Reset" value="Reset"/>
</div>
</td>
</tr>
</table>
</form>
</body>
</html>

3. Lalu masukkan script ini lagi dan simpan dengan nama hasil_input.php dan letakkan di xampp/htdoct

