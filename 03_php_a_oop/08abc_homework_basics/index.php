<?php

$numbers_of_lis = 11;
global $w;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h3>Úloha a;</h3>

  <ul>
    <?php

    if (is_int($numbers_of_lis) && $numbers_of_lis) {
      for ($i = 0; $i < $numbers_of_lis; $i++) {
        $q = $i + 1;
        echo "<li>{$q} hodnota</li>";
      }
    } else {
      echo "Musis zadat čislo.";
    }

    ?>
  </ul>
  <br>
  <h3>Úloha b;</h3>

  <?php

  if (is_int($numbers_of_lis) && $numbers_of_lis) {
    for ($i = 0; $i < $numbers_of_lis; $i++) {
      $q = ($i + 1) . '-';
      $w .= $q;
    }
    echo '<br>' . substr($w, 0, -1);
  } else {
    echo "Musis zadat čislo.";
  }

  ?>
  <br>
  <h3>Úloha c;</h3>
  <ol>
    <?php

    if (is_int($numbers_of_lis) && $numbers_of_lis) {
      for ($i = 0; $i < $numbers_of_lis; $i++) {
        $q = $i + 1;
        echo "<li><a href='show.php?id={$q}'>zaznam {$q}</a>, <a href='edit.php?id={$q}'>edit</a>, <a href='delete.php?id={$q}'>delete</a></li>";
      }
    } else {
      echo "Musis zadat čislo.";
    }

    ?>
  </ol>
  <br>
  <h3>Úloha d;</h3>
  <ol>
    <?php

    foreach (glob("img/*.*") as $filename) {
      $filename = substr($filename, strpos($filename, '/') + 1);
      $filename = substr($filename, 0, strpos($filename, '.'));
      $filename = ucwords(str_replace(['-', '_'], ' ', $filename));
      echo "<li>$filename</li>";
    }

    ?>
  </ol>
  <br>

  <?php

  $arr = array();



  foreach (glob("img/*.*") as $filename) {
    $filename = substr($filename, strpos($filename, '/') + 1);
    $title = substr($filename, 0, strpos($filename, '.'));
    $title = ucwords(str_replace(['-', '_'], ' ', $title));

    array_push($arr, array(
      "type" => 'quiz',
      'title' => $title,
      'pic' => $filename
    ));
  }

  $json_pretty = json_encode($arr, JSON_PRETTY_PRINT);

  echo '<pre>';
  echo ($json_pretty);
  echo '</pre>';



  ?>
</body>

</html>