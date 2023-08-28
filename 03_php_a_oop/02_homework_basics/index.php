<?php

// c;
$item_count = 5;
$item_price = 100;

$multip = $item_price * $item_count;

echo "<strong>Uloha c;</strong><br />";
echo "{$item_count}<br />";
echo "{$item_price}<br />";
echo "=<br />";
echo $multip;
echo "<hr>";

// d;
$tits = 2;
$bread = 5;
$taste = 75;

$cheat = [$tits, $bread, $taste];

$sum = array_sum($cheat);

echo "<strong>Uloha d;</strong><br />";
echo "Sum of variables is:<br />";
echo $sum;
