<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <title>T-Korpusz Innova Kft.</title>
    <link rel="icon" type="image" href="assets/logo.jpg"/>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="hatterkep">
    <!-- Navbár-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <header class="sticky-top" id="fejlec">
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark mb-4 border-bottom" id="navbar1">
        <div class="container-fluid">
            <img src="assets/logo2.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-center mx-2">
          <a class="navbar-brand" href="#" id="logoszoveg">T-Korpusz Innova</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
              <li class="nav-item">
                <a class="nav-link active mx-3" href="index.php?fooldal.php#teteje">Főoldal</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="index.php?fooldal.php#tudnivalok">Tudnivalók</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="index.php?fooldal.php#anyagrendeles">Anyagrandelés</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="index.php?prog=arak.php">Árak</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="index.php?prog=referenciak.php">Referenciák</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="index.php?prog=kontakt.php">Kontakt</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  <div id="tartalom" class="container px-5 px-lg-6" data-bs-spy="scroll" data-bs-target="#navbar1" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">
    <?php
    extract($_GET);
    if(isset($_GET['prog']))
        include $prog;
    else
        include 'fooldal.php';

    ?>
  </div>
    <!--Footer-->
    <footer class="py-5 bg-dark my-10">
        <div class="px-4 px-lg-5 text-center">
          <p class="text-white text-center"><img src="assets/logo2.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center mx-2">Copyright &copy;T-Korpusz Innova Kft. | All Rights Reserved</p>
          <p class="text-white text-center py-2">+36701234567  mail@email.com</p>
          <button class="text-white btn bi bi-instagram ikon" href="#videok" id="gombalso1"></button>
          <button class="text-white btn bi bi-facebook ikon" href="#videok" id="gombalso2"></button>
          <button class="text-white btn bi bi-twitter ikon" href="#videok" id="gombalso3"></button>
        </div>
    </footer>
  </body>
</html>
