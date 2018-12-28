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
    <div class="col-md-6">
      <h2><?= $members['fullname']; ?></h2>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <img src="<?= base_url(); ?>/uploads/<?= $members['foto']; ?>" width="150"> 
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-6">
      <table class="table table-hover">

    <tr>
      <td scope="col">Email</td>
      <td scope="col"><?= $members['email']; ?></td> 
    </tr>
    <tr>
      <td scope="col">Company</td>
      <td scope="col"><?= $members['name']; ?></td> 
    </tr>
    <tr>
      <td scope="col">Address</td>
      <td scope="col"><?= $members['address']; ?></td> 
    </tr>
    <tr>
      <td scope="col">City</td>
      <td scope="col"><?= $members['cityname']; ?></td> 
    </tr>
    <tr>
      <td scope="col">Country</td>
      <td scope="col"><?= $members['country']; ?></td> 
    </tr>

</table>

  </div>
  </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <a href="<?= base_url(); ?>members" class="btn btn-warning">Kembali</a> 
      </div>
    </div>
</div>