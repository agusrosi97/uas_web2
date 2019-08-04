<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>
</head>
<body>
	<h3>Menu Kategori</h3>
	<a href="{{ route('kategori.create')}}">Tambah Kategori</a>
	<br>
	@if (session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif	
	<table border="1" cellpadding="5">
		<tr>
					<th>NO</th>
					<th>ID Kategori</th>
					<th>Nama</th>
					<th colspan="2">Aksi</th>
		</tr>
		<tr>
				@foreach($kategori as $no=>$k)
					<th>{{$no+1}}</th>
					<th>{{$k->id_kat}}</th>
					<th>{{$k->nama}}</th>
					<th>
						<a href="kategori/{{$k->id_kat}}/edit">Ubah</a>
					</th>
					<th>
						<form action="{{ action('Con_kategori@destroy', $k['id_kat'])}}" method="post">
			            {{ csrf_field()}}
			            <input name="_method" type="hidden" value="DELETE">
			            <button class="btn btn-danger" type="submit">Delete</button>
			          </form>
					</th>
				
		</tr>
		@endforeach
	</table>
</body>
</html>