<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/templates/assets"; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/templates/assets"; ?>/css/style.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."assets/templates/assets"; ?>/js/bootstrap.min.js"></script>
  </head>

<body>
<div class="main">
<div class="container">
  <h1 class="error">
        Halaman tidak di temukan
  </h1>
  <h2 class="error">
        404
  </h2>
  <h3 class="error">
    <p>Sepertinya tersesat, Anda harus kembali.</p>
    <a class="error_back" href="<?php echo base_url(); ?>">Kembali lagi</a>
  </h3>

</div><!--end container-->
<div class="footer">
  <div class="container">
    <p> &copy; <script>document.write(new Date().getFullYear())</script>, by ndhigriya</p>
  </div>
</div>
</div><!--end main-->
</body>
</html>