<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>fun times php</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="container">

  <div class="page-header">
    <h1 class="text-muted">fun times php</h1>
  </div>

  <?php


  require_once 'inc/Adventure.php';
  require_once 'inc/Dude.php';

  $adventure = new Adventure();

  $adventure->addDude(
    new Dude(
      'Finn',
      'Finn is a silly kid who wants to become a great hero one day. He might not look too tough, but if there\'s evil around, he\'ll slay it. That\'s his deal.',
    )
  );

  $adventure->addDude(
    new Dude(
      'Jake',
      "Finn's best friend is a wise, old dog with a big heart. Jake has the magical ability to stretch and grow. When evil's not running amok, he plays viola with Lady Rainicorn.",
    )
  );

  $adventure->addDude(
    new Dude(
      'Ice King',
      'Armed with a magic crown and an icy heart, the Ice King has only one goal: to secure a wife by any means necessary.',
    )
  );

  $adventure->addDude(
    $dude = new Dude(
      'Pista',
      'Super',
    )
  );

  $dude->addComment('super');
  $dude->addComment('truper');
  $dude->addComment('trumper');
  ?>

  <div class="row">
    <?php

    foreach ($adventure->getDudes() as $dude) {
      echo '<article>';
      echo '	<h4>' . $dude->who . '</h4>';
      echo '	<p>' . $dude->wat . '<p>';
      echo '</article>';
    }

    ?>
  </div>
  <hr>
  <div class="row">
    <p>
      number of dudes: <strong><?php echo $adventure->dudeCount() ?></strong>

    </p>
  </div>
  <hr>

  <div class="row">
    <p>
    <ul>
      all comments
      <?php
      foreach ($adventure->allComments() as $comment) {
        echo "<li><strong>{$comment}</strong></li>";
      }
      ?>
    </ul>
    </p>
  </div>
  <hr>

  <div class="row">
    <p>
      <?php echo "number of comments: <strong>{$adventure->commentsCount()} </strong>" ?>
    </p>
  </div>
  <hr>

  <div class="row">
    <p>
      <?php
      $dude = $adventure->getDude('Pista');
      echo "show me 1 dude";
      echo '<article>';
      echo '	<h4>' . $dude->who . '</h4>';
      echo '	<p>' . $dude->wat . '<p>';
      echo 'comments:<ul>';
      foreach ($dude->comments as $comment) {
        echo "<li>{$comment}</li>";
      }
      echo '</ul>';
      echo '</article>';
      ?>
    </p>
  </div>
  <hr>
  <div class="row">
    <?php
    $adventure->removeDude('Jake');

    foreach ($adventure->getDudes() as $dude) {
      echo '<article>';
      echo '	<h4>' . $dude->who . '</h4>';
      echo '	<p>' . $dude->wat . '<p>';
      echo '</article>';
    }

    ?>
  </div>
  <hr>
  <div class="row">
    <?php
    $adventure->updateDude('Pista', 'Steve', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda facilis molestiae autem nostrum, aperiam omnis consequatur tempora porro non? Dicta tenetur adipisci molestiae consectetur ea? Eveniet consequatur molestias facilis hic.');

    foreach ($adventure->getDudes() as $dude) {
      echo '<article>';
      echo '	<h4>' . $dude->who . '</h4>';
      echo '	<p>' . $dude->wat . '<p>';
      echo '</article>';
    }

    ?>
  </div>
  <hr>
</body>

</html>