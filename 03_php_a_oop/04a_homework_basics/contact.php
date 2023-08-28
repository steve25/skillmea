<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Kickass Website</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="contact">

  <?php include 'header.php' ?>


  <main>
    <div class="content container">
      <h1 class="shadow">Send us an email</h1>

      <h2 class="shadow">
        We won't read it.
      </h2>

      <form action="#" class="contact-form">
        <label for="your-name">
          Your name (required)
          <input type="text" id="your-name" name="your-name">
        </label>

        <label for="your-email">
          Your email (required)
          <input type="email" id="your-email" name="your-email">
        </label>

        <label for="your-message">
          Your message
          <textarea id="your-message" name="your-message" cols="40" rows="10"></textarea>
        </label>

        <button class="btn btn-white">Send</button>
      </form>
    </div>
  </main>

  <aside class="pre-footer">
    <div class="container">
      <h3>Buy our stuff</h3>

      <p>
        This is a website, so obviously we are trying to sell you something.<br>
        Click here, so we can send you emails you don't want!
      </p>

      <a href="#" class="btn btn-green">Stuff to delete from your inbox</a>
    </div>
  </aside>

  <?php include 'footer.php' ?>

</body>

</html>