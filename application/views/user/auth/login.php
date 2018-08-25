<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ndhiGriya .login</title>
    <link rel="shortcut icon" href="<?php echo base_url()."assets/templates/assets"; ?>/img/icon.jpg">


    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/templates/assets"; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/templates/assets"; ?>/css/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url()."assets/templates/assets"; ?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."assets/templates/assets"; ?>/js/bootstrap.min.js"></script>
  </head>

<body>

<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">  
<div class="container">
<!-- <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigasi">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="<?php echo base_url()."assets/templates/assets"; ?>/img/logo.png">
      </a>
</div> -->
<!-- <div class="collapse navbar-collapse" id="navigasi">
  <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#"> 
                <i class="fa fa-firefox"></i>&nbsp;Website
            </a>
        </li>
         <li>
            <a href="#"> 
                <i class="fa fa-envelope-o"></i>&nbsp;Email
            </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
   </ul>
</div> -->
</div><!--end container-->
</nav>
<div class="main" style="background-image: url(assets/img/.jpg)">


<!--container-->
<div class="container">
<div class="login-box">
<!--3 dorong ketengah-->
<div class="col-xs-12 col-sm-6 col-md-3">
</div><!--enc col-->
<div class="col-xs-12 col-sm-12 col-md-6">
  <!--kotak login/register-->
  <div class="kotak-login-register">
    <p class="text-center title-login-register">Login Information</p>
    <!-- <form action="" method="post"> -->
    <?= form_open('login')?>
          <?= form_error('emails');?>
          <div class="form-group has-feedback">
            <input type="email" name="emails" value="<?=set_value('emails')?>" class="form-control" placeholder="Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <?= form_error('passwords');?>
          <div class="form-group has-feedback">
            <input type="password" name="passwords" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <!--login/forgot/submit-->
          <div class="row">
          <div class="col-xs-12 col-md-6">
            <a href="<?php echo base_url(); ?>">Back Homepage</a><br>
          </div><!-- /.col -->
          <div class="col-xs-12 col-md-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign in</button>
          </div><!-- /.col -->
          </div><!--row-->
    <?= form_close();?>
    <!-- </form> -->
    <!--end form-->
  </div><!--end kotak-login/register-->
</div>
<!--end 3-->

</div><!--end login box-->
</div><!--end container-->

<!--footer-->
<div class="footer">
  <div class="container">
    <p> &copy; Copyright <script>document.write(new Date().getFullYear())</script> ndhigriya</p>
  </div>
</div><!--end footer-->

</div><!--end main-->

</body>
</html>