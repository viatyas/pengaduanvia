<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data Aduan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
  <center><h2>Edit Data Aduan</h2></center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<div class="form-group">
				<label for="nama">Nama :</label>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" class="form-control" id="nama" placeholder="Masukkan nama anda" name="nama" value="<?php echo $u->nama ?>" required="">
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
					<input type="email" class="form-control" id="email" placeholder="Masukkan email anda" name="email" value="<?php echo $u->email ?>" required="">
			</div>
			<div class="form-group">
				<label for="topik">Topik Aduan :</label>
					<input type="text" class="form-control" id="topik" placeholder="Masukkan topik aduan anda" name="topik" value="<?php echo $u->topik ?>" required="">
			</div>
			<div class="form-group">
				<label for="kecamatan">Kecamatan :</label>
					<input type="text" class="form-control" id="kecamatan" placeholder="Masukkan kecamatan anda" name="kecamatan" value="<?php echo $u->kecamatan ?>" required="">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat :</label>
					<input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat anda" name="alamat" value="<?php echo $u->alamat ?>" required="">
			</div>
			<div class="form-group">
				<label for="tanggal">Tanggal Aduan :</label>
					<input type="date" class="form-control" id="tanggal" placeholder="Masukkan tanggal anda" name="tanggal" value="<?php echo $u->tanggal ?>" required="">
			</div>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>