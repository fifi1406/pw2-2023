<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="hasil_daftar.php" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
	<div>
		
		<h1>Form Pendaftaran</h1>
		<form>
			<div class="form-group row mb-3" border="1" >
				<label for="no" class="col-4 col-form-label">No</label>
				<input name="no" type="number" class="form-control" id="no" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
				</div>
			<div class="form-group row mb-3" >
				<label for="nama_lengkap">Nama Lengkap</label>
				<input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap">
				</div>
			<div class="form-group row mb-3" >
				<label for="email">Email</label>
				<input name= "email" type="text" class="form-control" id="email">
			</div>
			<div class="form-group row mb-3" >
				<label for="alamat">Alamat</label>
				<textarea name="alamat" type="text" class="form-control" id="alamat"></textarea>
			</div>
			<div class="form-group row mb-3" >
				<label for="telepon">Telepon</label>
				<input name="telepon" type="number" class="form-control" id="telepon">
			</div>
			<button name="proses" value="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</body>
</html>