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

  <?php include 'header.php' ?>

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
            <li data-from="left"><a href="?page=all">Všetko</a></li>
            <li data-from="right"><a href="?page=web">Web</a></li>
            <li data-from="left"><a href="?page=branding">Branding</a></li>
            <li data-from="right"><a href="?page=fotografia">Fotografia</a></li>
            <li data-from="left"><a href="?page=video">Video</a></li>
          </ul>

        </div>
        <?php
        $page = $_GET['page'] ?? 'all';
        switch ($page) {
          case 'web':
            include 'portfolio/web.html';
            break;
          case 'branding':
            include 'portfolio/branding.html';
            break;
          case 'fotografia':
            include 'portfolio/fotografia.html';
            break;
          case 'video':
            include 'portfolio/video.html';
            break;
          case 'all':
            include 'portfolio/all.html';
            break;
        }
        ?>

      </div>
    </article>
  </main>

  <?php include 'footer.php' ?>


</body>

</html>