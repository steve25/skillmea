<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>php funsies</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="container">

  <div class="page-header">
    <h1 class="text-muted">fun times php</h1>
  </div>

  <?php

  // ulozime hodnoty do premennych
  $item_count = 5;
  $item_price = 350;

  // vynasobime ich a vysledok ulozime do premennej $sum
  $sum = $item_count * $item_price;

  // premennu $sum vypiseme na stranku
  // cize na stranke sa objavi cislo
  echo "<strong>uloha b;</strong><br />";
  echo $sum;
  ?>

  <hr>
  <?php
  $num1 = 5;
  $num2 = 10;

  echo "<strong>uloha c;</strong><br />";

  if ($num1 > $num2) {
    echo 'Prve cislo je vacsie';
  } elseif ($num1 < $num2) {
    echo 'Druhe cislo je vacsie';
  } else {
    echo 'Cisla su rovnake';
  }
  ?>

  <hr>
  <?php
  $string1 = "jeden";
  $string2 = "jeden";

  echo "<strong>uloha d;</strong><br />";

  if ($string1 > $string2) {
    echo 'stringy nezacinaju rovnako';
  } elseif ($string1 < $string2) {
    echo 'stringy zacinaju rovnako';
  } else {
    echo 'stringy su rovnake';
  }
  ?>
  <hr>
  <?php
  $number = 0;
  $min = -5;

  echo "<strong>uloha d;</strong><br />";

  if ($number >= $min) {
    echo 'number je vacsie alebo rovna sa';
  }
  ?>
</body>

</html>