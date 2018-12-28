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
  <div>
    <h3>Nama  : Ryan Dhea Pratama (16.11.0144)</h3>
  </div>
<h1><?php echo $title?></h1>

<?php if(isset($ok)):?><div class="alert alert-info"><?php echo $ok?></div><?php endif;?>
<?php if(isset($error)):?><div class="alert alert-danger"><?php echo $error?></div><?php endif;?>

	<div class="row mt-4">
		<div class="col-md-5">
      <a href="<?=base_url(); ?>company/index" class="btn btn-info">CRUD Company</a>
      <a href="<?=base_url(); ?>city/index" class="btn btn-info">CRUD City</a>
			<a href="<?=base_url(); ?>members/add" class="btn btn-success">Add Data</a>
		</div>
    <div class="row-mt-4">
      <div class="col-md-8 float-right">
      <form action="" method="post" enctype="multipart/form-data" class="form-inline"> 
        <div class="form-group">
          <label>File Csv</label>
          <input type="file" class="form-control" name="csv">
          <button id="save" class="btn btn-primary">Import Csv

          </button>
        </div>
      </form>
      </div>
    </div>
	</div>

	<div class="row mt-2">
		<div class="col-md-12">
			<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Company</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php $i=1; ?>
  	<?php foreach($members as $mbr) : ?>
    <tr>
      <th><?= $i; ?></th> 
      <td><?= $mbr['fullname']; ?></td>
      <td><?= $mbr['email']; ?></td>
      <td><?= $mbr['name']; ?></td>
      <td><?= $mbr['cityname']; ?>, <?= $mbr['country']; ?></td>
      <td>
      	<a href="<?= base_url(); ?>members/edit/<?= $mbr['id']; ?>" class="btn btn-warning edit-btn">Edit</a>
    	  <a href="<?=base_url(); ?>members/detail/<?= $mbr['id']; ?>" class="btn btn-primary detail-btn">Detail</a>
      	<a href="<?= base_url(); ?>members/delete/<?= $mbr['id']; ?>" class="btn btn-danger delete-btn">Delete</a>
      </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
		</div>
	</div>
</div>