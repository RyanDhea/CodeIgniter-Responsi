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
			<form action="" method="post">
			  <div class="form-group">
			  	<input type="hidden" name="idcity" value="<?= $city['idcity']; ?>">
			    <label for="cityname">City Name</label>
			    <input type="text" class="form-control" id="cityname" name="cityname" value="<?= $city['cityname']; ?>">
			    <small class="form-text text-danger"><?= form_error('cityname'); ?></small>
			  </div>
			  <div class="form-group">
			    <label for="country">Country</label>
			    <input type="text" class="form-control" id="country" name="country" value="<?= $city['country']; ?>">
			    <small class="form-text text-danger"><?= form_error('country'); ?></small>
			  </div>
			  <a href="<?=base_url(); ?>city" class="btn btn-primary">Back</a> 
			<button type="submit" id="Submitbtn" name="Submitbtn" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>