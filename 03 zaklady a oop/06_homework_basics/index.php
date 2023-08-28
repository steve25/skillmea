<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import 'http://fonts.googleapis.com/css?family=Montserrat:300,400,700';

    body {
      color: #444;
      font-family: Montserrat;
      background: #eee;
      padding: 20px;
      -webkit-font-smoothing: antialiased;
    }

    h1 {
      margin: 0 0 20px;
    }

    table {
      color: #fff;
      background: #34495E;
      border-collapse: collapse;
      border-radius: 8px;
    }

    thead th {
      text-transform: capitalize;
    }

    th,
    td {
      padding: 16px 18px;
      border-bottom: 1px solid #46627f;
    }

    th,
    tfoot td {
      color: #dd5;
      text-align: left;
      font-weight: bold;
    }

    tfoot td {
      text-align: right;
      border: none;
    }

    .odd {
      background-color: #40576E;
    }
  </style>
</head>

<body>

  <?php
  $data = [
    [
      "title" => "The World's End",
      "genre" => "Sci-fi",
      "year"  => 2013,
      "gross" => 26004851
    ],
    [
      "title" => "Scott Pilgrim vs. the World",
      "genre" => "Sadness",
      "year"  => 2010,
      "gross" => 31524275
    ],
    [
      "title" => "Hot Fuzz",
      "genre" => "Buddy Cop",
      "year"  => 2007,
      "gross" => 23637265
    ],
    [
      "title" => "Shaun of the Dead",
      "genre" => "Zombie",
      "year"  => 2007,
      "gross" => 13542874
    ],
  ];


  $total_price = 0;

  foreach ($data as $key => $value) {
    $total_price += $value['gross'];
  }

  ?>
  <h1>Edgar Wright</h1>
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Gross</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $key => $value) : ?>
        <tr <?php if ($key % 2 !== 0) echo "class='odd'" ?>>
          <td><?= $value['title'] ?></td>
          <td><?= $value['genre'] ?></td>
          <td><?= $value['year'] ?></td>
          <td><?= '$' . number_format($value['gross']) ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="4"><?= '$' . number_format($total_price) ?></td>
      </tr>
    </tfoot>
  </table>
</body>

</html>