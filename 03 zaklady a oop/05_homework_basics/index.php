<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $directors = [
    [
      'id' => 1,
      'first_name' => 'Edgar',
      'last_name' => 'Wright',
      'country' => 'United Kingdom',
      'birthdate' => '1974-04-18',
    ],
    [
      'id' => 2,
      'first_name' => 'Jim',
      'last_name' => 'Jarmusch',
      'country' => 'United States',
      'birthdate' => '1953-01-22',
    ],
    [
      'id' => 3,
      'first_name' => 'Leos',
      'last_name' => 'Carax',
      'country' => 'France',
      'birthdate' => '1960-11-22',
    ],
    [
      'id' => 4,
      'first_name' => 'Ingmar',
      'last_name' => 'Bergman',
      'country' => 'Sweden',
      'birthdate' => '1918-07-14',
    ],
    [
      'id' => 5,
      'first_name' => 'Andrej',
      'last_name' => 'Tarkovskij',
      'country' => 'Russia',
      'birthdate' => '2000-10-10',
    ],
  ];
  echo '<pre>';

  // foreach ($directors as $key => $value) {
  //   echo $value['first_name'] . ' ' . $value['last_name'] . '<br>';
  // }

  // for ($i = 0; $i < count($directors); $i++) {
  //   echo $directors[$i]['first_name'] . ' ' . $directors[$i]['last_name'] . '<br>';
  // }

  $a = 0;

  while ($a < count($directors)) {
    echo $directors[$a]['first_name'] . ' ' . $directors[$a]['last_name'] . '<br>';
    $a++;
  }

  echo '</pre>';
  ?>
  <hr>


  <label for="directors">Choose your director:</label>
  <select name="directors" id="directors">
    <option value="">--Please choose an option--</option>
    <?php
    foreach ($directors as $key => $value) {
      // echo "<option value=" . $value['id'] . ">" . $value['first_name'] . " " . $value['last_name'] . "</option>";
      echo "<option value={$value['id']}>{$value['first_name']}  {$value['last_name']}</option>";
    }
    ?>
  </select>
  <hr>
  <label for="directors">Choose your director:</label>
  <select name="directors" id="directors">
    <option value="">--Please choose an option--</option>
    <?php foreach ($directors as $key => $value) : ?>

      <option value=<?= $value['id'] ?>>
        <?= $value['first_name'] . ' ' . $value['last_name'] ?>
      </option>

    <?php endforeach ?>
  </select>


</body>

</html>