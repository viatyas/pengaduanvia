<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Title Page-->
    <title>Form Aduan</title>

    <!-- Font special for pages-->
    <link href="<?php echo base_url('asset_form/')?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="<?php echo base_url('asset_form/')?>css/main.css" rel="stylesheet" media="all">
</head>
<body>
	 <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
        	<div class="card card-6">
        		<div class="card-heading">
        			<h2 class="title">Form Aduan</h2>
                </div>
 
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">

			<div class="card-body">
				<form method="POST">
                        <div class="form-row">
                <div class="name">Full name</div>
				<label for="nama"></label>
				<div class="value">
				<input type="nama" class="input--style-6" id="nama" placeholder="Masukkan nama anda" name="nama" required="">
			</div>
		</div>

			<div class="form-row">
				 <div class="name">Email address</div>
				<label for="email"></label>
				<div class="value">
				<div class="input-group">
				<input type="email" class="input--style-6" id="email" placeholder="Masukkan email anda" name="email" required="">
			</div>
		</div>
	</div>

		<div class="form-row">
            <div class="name">Topik Aduan</div>
            <div class="value">
            <div class="input-group">
				<label for="topik"></label>
				<input type="topik" class="textarea--style-6" id="topik" placeholder="Ceritakan aduan anda" name="topik" required="">
			</div>
			</div>
           </div>
                        

			<div class="form-row">
				 <div class="name">Kecamatan</div>
				<label for="kecamatan"></label>
				<div class="value">
				<div class="input-group">
				<input type="kecamatan" class="input--style-6" id="kecamatan" placeholder="Masukkan kecamatan anda" name="kecamatan" required="">
			</div>
		</div>
           </div>

			<div class="form-row">
				 <div class="name">Alamat</div>
				<label for="alamat"></label>
				<div class="value">
				<div class="input-group">
				<input type="alamat" class="input--style-6" id="alamat" placeholder="Masukkan alamat anda" name="alamat" required="">
			</div>
			</div>
           </div>

			<div class="form-row">
				 <div class="name">Tanggal Aduan</div>
				<label for="tanggal"></label>
				<div class="value">
				<div class="input-group">
				<input type="date" class="input--style-6" id="tanggal" placeholder="Masukkan tanggal aduan" name="tanggal" required="">
			</div>
			<tr>
				<td></td>
				<div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Submit</button>
                </div>
			</tr>
		</table>
	</form>	
</body>
</html>