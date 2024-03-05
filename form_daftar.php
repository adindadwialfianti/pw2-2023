<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div>
        <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="hasil_daftar.php">
		<h1>Form Pendaftaran</h1>		

			<div class="container px-3">
            <div class="form-group row mb-3">
				<label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
				<input name="nama_lengkap" class="form-control" id="nama_lengkap">
			</div>
			<div class="container px-3 mt-4">
            <div class="form-group row mb-3">
				<label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
				<input name="email" class="form-control" id="email">
			</div>
			<div class="container px-3 mt-4">
            <div class="form-group row mb-3">
				<label for="alamat" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
				<input name="alamat" class="form-control" id="alamat">
			</div>
			<div class="container px-3 mt-4">
            <div class="form-group row mb-3">
				<label for="telepon" class="col-4 col-form-label">Telepon</label>
                <div class="col-8">
				<input name="telepon" class="form-control" id="telepon">
			</div>
			<div class="form-group row mt-4 mb-3">
                <div class="offset-1 col-8">
                    <input type="submit" name="proses" value="Submit" class="btn btn-primary">
                </div>
            </div>
		</form>
	</div>
</body>
</html>