<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SI TUGAS KULIAH RPLK</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo site_url('/welcome/') ?>">SI TUGAS KULIAH RPLK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a href="<?php echo site_url('/welcome/') ?>" class="nav-link">List Tugas</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo site_url('/welcome/create') ?>" class="nav-link">Tambah Tugas</a>
      </li>
    </ul>
  </div>
</nav>