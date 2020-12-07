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
            
 <br/>
 <h3>Selamat Datang di Sistem Informasi Seputar Sistem Operasi Smartphone</h3>
 <br><br>
 <div class="container">
 <div class="row">
  <div class="col-md-12">
   <h3>Sistem Operasi List:</h3>
   <br>
   <table class="table">
       <thead class="thead-dark">
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Versi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($user as $user) { ?>
     <tr>
      <td><?= $user->nama ?></td>
      <td><?= $user->versi ?></td>
      <td><a class="btn btn-info" href="user/<?= $user->id ?>">Show</a> || <a class="btn btn-warning" href="user/edit/<?= $user->id ?>">Edit</a> || <a class="btn btn-danger" href="user/delete/<?= $user->id ?>" onclick="return confirm('Anda yakin mau menghapus data ini ?')">Delete</a></td>
     </tr>
    <?php } ?>
</tbody>
   </table>
   <button class="btn btn-primary" onclick="window.location.href='user/create'">Create</button>
  </div>
 </div>
 </div>

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>