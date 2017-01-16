<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FaberNainggolan">
    <title><?=$title?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

  </head>

  <body>
    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CORPUS SMS SPAM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?=base_url()?>home"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <<!-- li class="active"><a href="<?=base_url()?>barang"><i class="glyphicon glyphicon-th"></i> Barang</a></li> -->
            <li class="active"><a href="<?=base_url()?>sms">Spam SMS</a></li>
            <li><a href="<?=base_url()?>filter">FILTER</a></li>
            <li><a href="<?=base_url()?>kamus">KAMUS</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
