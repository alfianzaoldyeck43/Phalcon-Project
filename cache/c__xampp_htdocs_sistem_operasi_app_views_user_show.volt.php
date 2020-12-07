<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?= ($title ? strip_tags($this->escaper->escapeHtml($title)) : 'Untitled') ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            

 <div class="row">
  <div class="col-md-12">
<div class="card">
  <div class="card-header">
    Sistem Operasi Detail
  </div>
  <div class="card-body">
    <h5 class="card-title">Nama : <?= $user->nama ?></h5>
    <p class="card-text">Jenis : <?= $user->jenis ?></p>
    <p class="card-text">Versi 	: 	<?= $user->versi ?></p>
    <p class="card-text">Tahun Release 	: 	<?= $user->tahun_keluar ?></p>
    <button class="btn btn-primary" onclick="window.location.href='../user'">Kembali</button>
  </div>
</div>

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>