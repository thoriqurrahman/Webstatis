<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Keren || by Thoriqurrahman.Akrami</title>
  <link rel="shortcut icon" href="images/saya.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-primary shadow-lg">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="images/naon.png" alt="Logo" height="90px" width="110px" class="d-inline-block align-text-top">
      
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=".">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=profil">profil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            latihan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?m=webdev">Webdev</a></li>
            <li><a class="dropdown-item" href="?m=server">Server</a></li>
            <li><a class="dropdown-item" href="?m=jarkom">Jarkom</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?m=album">Album</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container mt-2">
    <?php include_once('tkj.php'); ?>
  </div>


  <div class="fixed-bottom">
  <div class="card">
    <div class="card-body">
      &copy; 2024-<?=date("y")?> - Kelas Tkj
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>