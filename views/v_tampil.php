<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<head>
    <title>Admin</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li class="nav-item">
      		<a class="nav-link disabled" href="javascript:void(0)"><?php echo $this->session->userdata('nama')?></a></li>
       <li><a href="<?php echo site_url('login/logout')?>" class="btn btn-success my-2 my-sm-0" type="button">Logout</a></li>
	</form>
      </ul>
    </div>
  </nav>
</form>
<h5>Data Aduan</h5>           
  <table class="table table-dark table-striped">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Topik Aduan</th>
			<th>Kecamatan</th>
			<th>Alamat</th>
			<th>Tanggal Aduan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->topik ?></td>
			<td><?php echo $u->kecamatan ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->tanggal ?></td>
			<td>
			    <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
				<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>