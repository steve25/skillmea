<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Nightfury</title>

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&amp;subset=latin,latin-ext">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="js/jquery-2.1.1.min.js"></script>
  <!--[if lt IE 9]>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
</head>

<body>

  <header>
    <div class="contact-bar">
      <div class="container">
        <?php include 'variables.php' ?>
        <ul class="menu personal">
          <li><i class="fa fa-phone"></i>
            <?php echo "<a href='tel:$contact_phone'>$contact_phone</a>"; ?>
          </li>
          <li><i class="fa fa-envelope"></i>
            <?php echo "<a href='mailto:$contact_email'>$contact_email</a> " ?>
          </li>
        </ul>
        <ul class="menu social">
          <li><a href="#" class="social-icon"><i class="fa fa-github"></i></a></li>
          <li><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" class="social-icon"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="nav-bar">
      <div class="container">
        <h1 class="logo">
          <a href="#">
            <strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
          </a>
        </h1>

        <nav class="group">
          <ul class="menu navigation">
            <li><a href="index.html"><i class="fa fa-shield fa-2x"></i> Domov</a></li>
            <li class="selected"><a href="portfolio.html"><i class="fa fa-leaf fa-2x"></i> Portfolio</a></li>
            <li><a href="about.html"><i class="fa fa-bolt fa-2x"></i> O nás</a></li>
            <li><a href="contact.html"><i class="fa fa-trophy fa-2x"></i> Kontakt</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    <article>
      <header class="post-header">
        <div class="container">
          <h1 class="post-title">Portfólio našich prác</h1>
        </div>
      </header>
      <div class="post-content">
        <div class="container">

          <h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>

          <ul class="menu controls">
            <li data-from="left"><a href="index.php">Všetko</a></li>
            <li data-from="right"><a href="web.php">Web</a></li>
            <li data-from="left"><a href="branding.php">Branding</a></li>
            <li data-from="right"><a href="fotografia.php">Fotografia</a></li>
            <li data-from="left"><a href="video.php">Video</a></li>
          </ul>

        </div>