<!DOCTYPE html>
<html>
<head>
	<title>mengisi form pandaftaran siswa</title>
<link rel="icon" href="logo kursus.png" />
</head>
<body>
	
	<table border="1" align="center" width="80%" bgcolor="yellow">
		<tr bgcolor="white">
			<td width="10%"><center><img src="logo kursus.png" width="75%" align="center"></center></td>
			<td colspan="4" width="60%" align="center"><font size="5"><strong>KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI</strong></font> <br><b>KURSUS RUANG BELAJAR<b><br> <br></td>
		</tr>
		
		<tr>

			<td colspan="6"> 

				
<form method="post" action="simpan.php" enctype="multipart/form-data">
<input type="hidden" name="fakultas" value="Teknik">	
<table border="0" width="80%" align="center">
	<tr>
		<td colspan="4" align="center"><strong><font size="5"> FORM INPUTAN DATA DIRI PESERTA KURSUS</strong></font></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" maxlength="12" name="nama" size="30"></td>

	</tr>
    <tr>
		<td>Nim/Id</td>
		<td>:</td>
		<td><input type="number" maxlength="50" name="Nim" size="50"></td>
	</tr>
    <tr>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><input type="text" maxlength="12" name="nama" size="25"></td>
        
	</tr>
    <tr>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><input type="date" maxlength="12" name="nama" size="50"></td>
        
	</tr>
    <tr>
		<td>Kota</td>
		<td>:</td>
		<td><input type="text" maxlength="12" name="nama" size="25"></td>

	</tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea cols="22" rows="3" ></textarea></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" maxlength="12" name="nama" size="30"></td>
        </tr>
    
	<tr>
    <tr>
		<td>No Hp</td>
		<td>:</td>
		<td><input type="number" maxlength="50" name="Nim" size="50"></td>
	</tr>
		<td>Pendidikan Saat Ini</td>
		<td>:</td>
		<td><select name="prodi" required="">
			<option></option>
			<option value="SD">Sekolah Dasar</option>
			<option value="SMP">Sekolah Menengah Pertama</option>
			<option value="SMA">Sekola Menengah Atas</option>
			<option value="SMK">Sekolah Menengah Kejuruan</option>
            <option value="MA">Mahasiswa</option>
            <option value="OL">tidak satupun diatas</option>
            
                
			
		</select></td>
	</tr>
	<tr>
		<td>Jenis kelamin</td>
		<td>:</td>
		<td><input type="radio" name="jenkel" value="laki-laki"> Laki-Laki <input type="radio" name="jenkel" value="perempuan"> Perempuan</td>
	</tr>
	<tr>
		<td>Upload Foto</td>
		<td>:</td>
		<td><input type="file" name="foto"></td>
	</tr>
	<tr>
		<td colspan="4"><hr></td>
	</tr>
    <tr>
		<td colspan="4" align="center"><strong><font size="5"> FORM INPUTAN DATA PAKET KURSUS</strong></font></td>
	</tr>

	
	 <tr>
		<td>Jenis Paket</td>
		<td>:</td>
		<td><select name="paket" required="">
			<option></option>
			<option value="p1">paket I</option>
			<option value="SMP">PaketII</option>
			<option value="SMA">Paket III</option>
			<option value="SMK">Paket IV</option>
            
	</tr>
    <tr>
		<td>Informasi Harga</td>
		<td>:</td>
            <td>Paket I    : 500.000/bulan </td>
            <td>Paket II   : 1000.000/bulan </td>
             <td>Paket III  : 1.500.000/bulan </td>
             <td>Paket IV   : 2.000.000/bulan </td>
		    <td> <maxlength="12" name="nama" size="30"></td>
        

	</tr>
    <tr>
		<td></td>
		<td></td>
		<td><input type="submit" value="Simpan"> // <input type="reset" value="Batal"></td>
	</tr>
</table>
</form>

			</td>	
		</tr>
		<tr>
			<td colspan="6"> fOOTER</td>	
		</tr>
	</table>





<a href="praktikum/utama.php"><button>kembali ke halaman utama</button>
</body>
</html>