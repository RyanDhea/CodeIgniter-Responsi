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
<?php if(isset($ok)):?><div class="alert alert-info"><?php echo $ok?></div><?php endif;?>
<?php if(isset($error)):?><div class="alert alert-danger"><?php echo $error?></div><?php endif;?>

	<div class="row mt-4">
		<div class="col-md-3">
			<a href="<?=base_url(); ?>company/add" class="btn btn-success">Add Company Data</a>
		</div>
	</div>

	<div class="row mt-2">
		<div class="col-md-12">
			<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Company Name</th>
 
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach($company as $cp) : ?>
    <tr>
      <th><?= $i; ?></th> 
      <td><?= $cp['name']; ?></td>


      <td>
      	<a href="<?= base_url(); ?>company/edit/<?= $cp['idcompany']; ?>" class="btn btn-warning">Edit</a>
      	<a href="<?= base_url(); ?>company/delete/<?= $cp['idcompany']; ?>" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
		</div>
	</div>
</div>