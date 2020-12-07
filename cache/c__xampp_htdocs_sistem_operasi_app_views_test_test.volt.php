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
            
 <br>
 <div class="row">
  <div class="col-md-12">
   Hello codedoct!!!
   <br>
   users:
   <?php if (($data['users'])) { ?>
    <ul>
     <?php foreach ($data['users'] as $user) { ?>
      <li><?= $user ?></li>
     <?php } ?>
    </ul>
   <?php } ?>
  </div>
 </div>

 <div class="row">
  <div class="col-md-12">
   gender:
   <ul>
    <?php foreach ($data['genders'] as $key => $value) { ?>
     <li><?= $value ?></li>
    <?php } ?>
   </ul>
  </div>
 </div>
 <br>
 <h5>Yang atas menggunakan form phalcon yang bawah menggunakan form biasa</h5>
 <div class="row">
  <div class="col-md-12">
   <?= $form->label('name') ?>
   <?= $form->render('name', ['class' => 'form-control']) ?>
   <br>
  </div>
 </div>
 <div class="row">
  <div class="col-md-12">
   <label>Nama user</label>
   <input type="text" name="name" class="form-control" placeholder="Type your name">
  </div> 
 </div>
 

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>