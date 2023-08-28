<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .red {
      color: red;
    }
  </style>
</head>

<body>
  <h3>Uloha a;</h3>
  <?php
  //**
  // Uloha a;
  //*/
  function anchor($url, $text)
  {
    echo "<a href='{$url}'>$text</a>";
  }
  ?>

  <p>ked chces googlit, pouzi tento kvalitny <?php anchor('http://bing.hu', 'vyhladavac') ?></p>
  <hr>
  <h3>Uloha b;</h3>
  <?php
  //**
  // Uloha b;
  //*/

  $atts = [
    'title' => 'toto je link',
    'class' => 'red'
  ];

  function anchor_multi($url, $text, $atts)
  {
    $new_atr = '';
    foreach ($atts as $key => $value) {
      $new_atr .= $key . '="' . $value . '"';
    }
    echo "<a href='{$url}' {$new_atr}>$text</a>";
  }
  ?>

  <p>ked chces googlit, pouzi tento kvalitny <?php anchor_multi('http://bing.hu', 'vyhladavac', $atts) ?></p>
  <hr>
  <h3>Uloha c;</h3>
  <?php

  //**
  // Uloha c;
  //*/

  $base_url = "http://test.localhost/domaca_10/";

  function redirect($page)
  {
    global $base_url;

    // $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (str_starts_with($page, $base_url) && str_ends_with($page, 'php')) {
      echo "<strong>{$page}</strong>";
      return;
    }

    if (str_starts_with($page, $base_url) && !str_ends_with($page, 'php')) {
      echo "<strong>{$page}.php</strong>";
      return;
    }

    if (!str_starts_with($page, $base_url) && str_ends_with($page, 'php')) {
      echo "<strong>{$base_url}{$page}</strong>";
      return;
    }

    echo "<strong>{$base_url}{$page}.php</strong>";
  }
  ?>

  <p>1. <?php redirect('edit.php'); ?></p>
  <p>2. <?php redirect('edit'); ?></p>
  <p>3. <?php redirect('http://test.localhost/domaca_10/edit.php'); ?></p>
  <p>4. <?php redirect('http://test.localhost/domaca_10/edit'); ?></p>
  <hr>
  <h3>Uloha d;</h3>
  <?php

  //**
  // Uloha d;
  //*/


  function format_date($date, $locale)
  {
    switch ($locale) {
      case 'sk':
        $locale .= '_' . strtoupper($locale);
        break;
      case 'us':
        $locale = 'en' . '_' . strtoupper($locale);
        break;
      case 'ja':
        $locale .= '_JP';
        break;
    }

    //hack time
    $date = ' 00:00:00.000000';
    $new_date = new DateTime($date);

    $formatter = new IntlDateFormatter(
      $locale,
      IntlDateFormatter::FULL,
      IntlDateFormatter::NONE,
    );

    echo "<strong>{$formatter->format($new_date)}</strong>";
  }
  ?>

  <p>1. <?php format_date('12-28-1982', 'sk'); ?></p>
  <p>2. <?php format_date('12-28-1982', 'us'); ?></p>
  <p>3. <?php format_date('12-28-1982', 'ja'); ?></p>

  <h3>Uloha e;</h3>
  <?php

  //**
  // Uloha e;
  //*/

  $data = ['one', 'two', 'balls'];

  function my_array_push()
  {
    $data = func_get_args();
    $new_data = [];

    foreach ($data as $value) {
      if (gettype($value) == 'array') {
        $new_data = $new_data + $value;
      } else {
        array_push($new_data, $value);
      };
    }

    echo `<em>`;
    print_r($new_data);
    echo `</em>`;

    return $new_data;
  }
  ?>

  <p>1. <?php my_array_push($data, 'four', 'fiver'); ?></p>




</body>

</html>