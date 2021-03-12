<!doctype html>
<html>
  <head>
    <title>Mammouthel</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="<?php echo base_url('assets/image/dino.png'); ?>" alt="" width="80" height="61" class="d-inline-block align-top">
        <a class="navbar-brand" id="name" href="../index">
          Mammouthel
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse show" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="../index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Sites
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach ($all as $key => $value): ?>
                  <li><a class="dropdown-item" href="../site/<?= $value['id'] ?>">Informations <?= $value['name'] ?></a></li>
                <?php endforeach ?>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="../index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Notes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach ($all as $key => $value): ?>
                  <li><a class="dropdown-item" href="../notes/<?= $value['id'] ?>">Notes <?= $value['name'] ?></a></li>
                <?php endforeach ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <br>
    <h1 class="title"><?= esc($title); ?></h1>
    <br>