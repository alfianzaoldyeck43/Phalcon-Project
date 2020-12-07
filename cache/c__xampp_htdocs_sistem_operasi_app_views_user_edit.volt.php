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
    <form method="POST">
      <div class="form-group">
        <label>Nama SO</label>
        <input type="text"
          name="nama"
          class="form-control"
          placeholder="Type your name"
          required
          value="<?= $user->nama ?>"
        />
      </div>
      <div class="form-group">
        <label>Jenis</label>
        <input
          type="text"
          name="jenis"
          class="form-control"
          placeholder="Type your jenis"
          required
          value="<?= $user->jenis ?>"
        />
      </div>
      <div class="form-group">
        <label>Versi</label>
        <input
          type="text"
          name="versi"
          class="form-control"
          placeholder="Type your versi"
          required
          value="<?= $user->versi ?>"
        />
      </div>
      <div class="form-group">
        <label>Tahun Release</label>
        <input
        type="text"
          name="tahun_keluar"
          class="form-control"
          placeholder="Type your tahun keluar"
          required
          value="<?= $user->tahun_keluar ?>"
        />
      </div>
      <input class="btn btn-success" type="submit" value="Save" />
      <button class="btn btn-danger" type="button" onclick="window.location.href='../../user'">
        Cancel
      </button>
    </form>
  </div>
</div>

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>