<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <h3>Uloha a;</h3>
  <h1>
    <?php
    function greeting($name)
    {
      if (isset($name)) {
        echo "Ahoj, {$name}, ty trulo.";
      } else {
        echo "Ahoj, preco nemas meno?";
      }
    }

    greeting('Vaso')
    ?>
  </h1>
  <hr>
  <h3>Uloha b;</h3>
  <?php
  function pre_r($data)
  {
    if (isset($data)) {
      echo "<pre>";
      print_r($data);
      echo "</pre>";
    }
  }

  $students = array(
    "Biology" => 95,
    "Physics" => 90,
    "Chemistry" => 96,
    "English" => 93,
    "Computer" => 98
  );


  $students = (object) $students;

  echo pre_r($students);
  echo print_r($students);
  ?>
  <hr>
  <h3>Uloha c;</h3>
  <?php
  function linkMaker($links)
  {
    if (isset($links)) {
      foreach ($links as $link) {
        echo "<a href='web.php?page=" . strtoupper($link) . "'>" . ucfirst($link) . "</a><br />";
      }
    }
  }

  linkMaker(['web', 'gule', 'vajcia']);
  ?>
  <hr>
  <h3>Uloha d;</h3>
  <?php
  $product_count = 5;
  $product_price = 300;
  function how_much($product_count, $product_price)
  {
    if (isset($product_count) && isset($product_price)) {
      return $product_count * $product_price;
    }
  }

  echo "<p>";
  echo "Kupil si {$product_count} predmetov za " . how_much($product_count, $product_price) . " dokopy.";
  echo "</p>";

  ?>
  <hr>
  <h3>Uloha e;</h3>
  <?php

  $number_one = 5;
  $number_two = 300;

  function higher_number($number_one, $number_two)
  {
    if (isset($number_one) && isset($number_two)) {
      return max($number_one, $number_two);
    }
  }

  echo "<p>";
  echo "Vacsie cislo je: " . higher_number($number_one, $number_two);
  echo "</p>";

  ?>
  <hr>
  <h3>Uloha f;</h3>
  <?php

  $numbers = [5, 10, 12, 2, 64, 24, 84, 36, 57];

  function numbers_array_sum($numbers)
  {
    if (isset($numbers)) {
      return array_sum($numbers);
    }
  }

  echo "<p>";
  echo "Najvacsie cislo je: " . numbers_array_sum($numbers);
  echo "</p>";

  ?>
  <hr>
  <h3>Uloha g;</h3>
  <?php


  function every_second($numbers)
  {
    if (isset($numbers)) {
      foreach ($numbers as $key => $value) {
        if ($key % 2 == 0) {
          unset($numbers[$key]);
        }
      }
      return implode(', ', $numbers);
    }
  }

  echo "<p>";
  echo "Kazde druhe cislo je : " . every_second($numbers);
  echo "</p>";

  ?>
  <hr>
  <h3>Uloha h;</h3>
  <?php


  function highest_number_in_array($numbers)
  {
    if (isset($numbers)) {
      return max($numbers);
    }
  }

  echo "<p>";
  echo "Najvacsie cislo je : " . highest_number_in_array($numbers);
  echo "</p>";

  ?>
  <hr>
  <h3>Uloha i;</h3>
  <?php

  $money = 15321.35;

  function money_format($money)
  {
    if (isset($money)) {
      return number_format($money, 2, ',', ' ');
    }
  }

  echo "<p>";
  echo "V penazenke mam : " . money_format($money) . "€";
  echo "</p>";

  ?>
  <hr>
  <h3>Uloha j;</h3>
  <?php

  $price = 124.12;
  $discount = 13;

  function calculate_discount($price, $discount)
  {
    if (isset($price) && isset($discount)) {
      return money_format($price - ($price / $discount));
    }
  }

  echo "<p>";
  echo "V penazenke mam : " . calculate_discount($price, $discount) . "€";
  echo "</p>";

  ?>
</body>

</html>