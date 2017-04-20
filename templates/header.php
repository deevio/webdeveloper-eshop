<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eshop</title>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
</head>
<body>
<nav>
<!--
<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/books">Knihy</a></li>
</ul>

-->
</nav>

   <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">KNIHY</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li <?php ?> ><a href="/">Home</a></li>
              <li><a href="/books">Knihy</a></li>
              <li><a href="/kontakt">Kontakt</a></li>
            </ul>
     
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>