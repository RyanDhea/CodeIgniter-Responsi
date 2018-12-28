<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/font_awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" >
    <title><?= $title?></title>
  </head>

<div class="container">
<h1><?php echo $title?></h1>
	<div class="row mt-4">
		<div class="col-md-12">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $members['id']; ?>">
				<input type="hidden" name="fotoLama" value=" <?= $members['foto']; ?> ">
	
			  <div class="form-group">
			    <label for="fullname">Name</label>
			    <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $members['fullname']; ?>">
			    <small class="form-text text-danger"><?= form_error('fullname'); ?></small>
			  </div>

			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="text" class="form-control" id="email" name="email" value="<?= $members['email']; ?>">
			    <small class="form-text text-danger"><?= form_error('email'); ?></small>
			  </div>

			  <div class="form-group">
			    <label for="address">Address</label>
			    <input type="text" class="form-control" id="address" name="address" value="<?= $members['address']; ?>">
			    <small class="form-text text-danger"><?= form_error('address'); ?></small>
			  </div>

			  <div class="form-group">
			    <label for="company">Company</label>
			    <select class="form-control" id="company" name="company">
			    <?php foreach($company as $cmp): ?>
			      <option value="<?= $cmp['idcompany']; ?>"><?= $cmp['name']; ?></option> 
				<?php endforeach; ?>
			    </select>

			  </div>

			  <div class="form-group">
			    <label for="city">City</label>
			    <select class="form-control" id="city" name="city">
			    <?php foreach($city as $cty): ?>
			      <option value="<?= $cty['idcity']; ?>"><?= $cty['cityname']; ?>,<?= $cty['country']; ?></option> 
				<?php endforeach; ?>
			   </select>
			  </div>

			  <div class="form-group">
				<label for="foto">Picture</label>
				<img src="<?= $members['foto']; ?> " alt="" width="40px"> <br>	
				<input type="file" class="form-control" name="foto">
			  </div>

			<a href="<?=base_url(); ?>members" class="btn btn-warning">Kembali</a> 
			<button type="submit" id="Submitbtn" name="Submitbtn" class="btn btn-info">Simpan</button>
			</form>
		</div>
	</div>
</div>