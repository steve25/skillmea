<?php

include_once '_inc/header.php';


// toto najde vsetky albumy vasa patejdla na spotify
// ma tam ID: 0CbbftseLRwYyUdmOXvH6l
// staci zmenit to ID v adrese a ID ineho interpreta a vypise to jeho albumy

//
// ITUNES
//-------

$itunes = file_get_contents('https://itunes.apple.com/search?term=vaso+patejdl&entity=album');

$itunes = json_decode($itunes);

echo '<h3>uloha a; iTunes</h3>';

foreach ($itunes->results as $album) {
  $artist = $album->artistName;
  $name = $album->collectionName;
  $url  = $album->artistViewUrl;

  echo '<p>';
  echo "	<img src='{$album->artworkUrl100}'>";
  echo "	<a href='{$url}'>{$artist} - {$name}</a>";
  echo '</p>';
}

//
// json
//-------

$json = file_get_contents('./_inc/albums.json');

$json = json_decode($json);

echo '<h3>uloha b; json</h3>';

echo '<ul>';

foreach ($json->items as $album) {
  $name = $album->name;
  $url  = $album->external_urls->spotify;
  echo '<li>';
  echo '	<img src="' . $album->images[0]->url . '">';
  echo '	<a href="' . $url . '">Vaso Patejdl - ' . $name . '</a>';
  echo '</li>';
}

echo '</ul>';

include_once '_inc/footer.php';
