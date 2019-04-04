<!DOCTYPE html>
<html lang="nl">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cloud Designs Webdesign</title>

  <!-- CSS: Bootstrap, new-age, FA5 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="css/new-age.min.css">

  <!-- CSS: eigen stylesheet -->
  <link rel="stylesheet" href="css/webBureau.css">

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top achterkleur1 black" id="mainNav">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right kleur2" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger black" href="index.html#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger black" href="index.html#realisaties">Realisaties</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger black" href="index.html#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header class="achterkleur2">
  <div class="container h-50">
      <a href="index.html"><img src="img/logo.svg" class="img-fluid" alt="Cloud Designs logo"></a>
  </div>
</header>
<!-- form response-->
<section class="achterkleur5" id="contact">
  <div class="container">
    <div class="section-heading text-center">
      <h2>Bedankt!</h2>
      <h3>We zullen u zo snel mogelijk contacteren!</h3>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Hieronder kan u nog nalezen wat u heeft verstuurd.</p>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>Naam:</p>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>
            <?php
                if(isset($_POST["naam"]) && $_POST["naam"] != "")
                    echo $_POST["naam"];
                else
                    echo "Naam werd niet ingegeven";
            ?>
            </p>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>E-mail:</p>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>
            <?php
                if(isset($_POST["email"]) && $_POST["email"] != "")
                    echo $_POST["email"];
                else
                    echo "E-mail werd niet ingegeven";
            ?>
            </p>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>Bericht:</p>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>
            <?php
                if(isset($_POST["text"]) && $_POST["text"] != "")
                    echo $_POST["text"];
                else
                    echo "Bericht werd niet ingegeven";
            ?>
            </p>
        </div>
        <div class="col-12">
            <p>Om terug te gaan naar de vorige pagina kan je hierboven op ons logo klikken.</p>
        </div>

</section>

<footer class="achterkleur1">
  <div class="container">
    <p>&copy; Cloud Designs 2019. All Rights Reserved.</p>
  </div>
</footer>

<!-- JS: jQuery, Bootstrap, new-age -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="js/new-age.min.js"></script>

</body>

</html>
