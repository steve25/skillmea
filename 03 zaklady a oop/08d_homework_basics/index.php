<?php
function category($url)
{
  return ucfirst(str_replace(['-', '_'], ' ', $url));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h3>
    <?php
    if (isset($_GET['page'])) {
      echo category($_GET['page']);
    } else {
      echo 'Branky';
    }
    ?>
  </h3>
  <ul>
    <?php
    foreach (glob("produkty/*") as $filename) {
      $url = substr($filename, strpos($filename, '/') + 1);
      $category = category($url);

      echo "<li><a href='?page={$url}'>" . $category . "</a></li>";
    }
    ?>
  </ul>
  <hr>
  <?php
  if (isset($_GET['page'])) {
    $product_path = $_GET['page'];
  } else {

    $product_path = 'branky';
  }
  foreach (glob("produkty/{$product_path}/thumbs/*") as $filename) {
    $basename = basename($filename);
    echo "<a href='produkty/{$product_path}/images/{$basename}'><img src='{$filename}' alt=''></a>";
  }

  ?>
</body>



</html>