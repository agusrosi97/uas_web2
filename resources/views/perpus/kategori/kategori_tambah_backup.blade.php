<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>
</head>
<body>
	<h3>Menu Kategori</h3>
	<a href="{{ route('kategori.index')}}">Kembali</a>
	<br>


	<form action="{{route('kategori.store')}}" method="post">
		{{ csrf_field()}}
		<table border="1" cellpadding="5">
		<tr>
					<td>Id Kategori</td>
					<td>:</td>
					<td><input type="text" name="id_kat"></td>
		</tr>
		<tr>
					<td>Nama Kategori</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="btnSimpan" value="Simpan"></td>
		</tr>
	</table>
	</form>
	
</body>
</html>