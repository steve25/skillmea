<?php


require __DIR__ . '/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

use Users\User;
use Users\Admin;

$first_name = 'steve';
$lastname_name = 'stevenson';
$email = 'steve@stevenson.com';
$avatar = 'avatar.webp';

$user = new User();
$user->setFirst_name($first_name);
$user->setLast_name($lastname_name);
$user->setEmail($email);
$user->setAvatar($avatar);
$user->makeCard();

$admin = new Admin();
$admin->setFirst_name('admin');
$admin->setLast_name('ADMIN');
$admin->fullName();
$admin->destroyEverything();




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>