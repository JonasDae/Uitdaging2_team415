<!DOCTYPE html>
<html lang="nl">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Formulierverwerking</title>

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
<section class="team bg-primary text-center" id="team">
  <div class="container">
    <div class="section-heading text-center">
      <h2>Bedankt!</h2>
      <h3>We zullen u zo snel mogelijk contacteren!</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Hieronder kan u nog nalezen wat u heeft verstuurd.</p>
        </div>
        <div class="col-md-6">
            <p>Naam:</p>
        </div>
        <div class="col-md-6">
            <p>
            <?php
                if(isset($_POST["naam"]) && $_POST["naam"] != "")
                    echo $_POST["naam"];
                else
                    echo "Naam werd niet ingegeven";
            ?>
            </p>
        </div>
        <div class="col-md-6">
            <p>E-mail:</p>
        </div>
        <div class="col-md-6">
            <p>
            <?php
                if(isset($_POST["email"]) && $_POST["email"] != "")
                    echo $_POST["email"];
                else
                    echo "E-mail werd niet ingegeven";
            ?>
            </p>
        </div>
        <div class="col-md-6">
            <p>Bericht:</p>
        </div>
        <div class="col-md-6">
            <p>
            <?php
                if(isset($_POST["text"]) && $_POST["text"] != "")
                    echo $_POST["text"];
                else
                    echo "Bericht werd niet ingegeven";
            ?>
            </p>
        </div>
        <div class="col-md-12">
            <p>Om terug te gaan naar de vorige pagina kan je hieronder op ons logo klikken.</p>
        </div>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-lg-7 my-auto">
        <div class="header-content mx-auto">
        <a href="./index.html">
          <img src="img/logo.svg" class="img-fluid" alt="">
        </a>
          <h3 class="mb-5">Webdesign waar je van in de wolken bent</h3>
        </div>
      </div>
    </div>
  </div>
</header>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <p>&copy; Your Website 2019. All Rights Reserved.</p>
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="#">Privacy</a>
      </li>
      <li class="list-inline-item">
        <a href="#">Terms</a>
      </li>
      <li class="list-inline-item">
        <a href="#">FAQ</a>
      </li>
    </ul>
  </div>
</footer>

<!-- JS: jQuery, Bootstrap, new-age -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="js/new-age.min.js"></script>

</body>

</html>
