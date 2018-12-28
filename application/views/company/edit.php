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
<div class="container">
	<div class="row mt-4">
		<div class="col-md-12">
			<form action="" method="post">
			  <div class="form-group">
			  	<input type="hidden" name="idcompany" value="<?= $company['idcompany']; ?>">
			    <label for="companyname">Company Name</label>
			    <input type="text" class="form-control" id="companyname" name="companyname" value="<?= $company['name']; ?>">
			    <small class="form-text text-danger"><?= form_error('companyname'); ?></small>
			  </div>

			  <a href="<?=base_url(); ?>company" class="btn btn-warning">Kembali</a> 
			<button type="submit" id="Submitbtn" name="Submitbtn" class="btn btn-info">Simpan</button>
			</form>
		</div>
	</div>
</div>