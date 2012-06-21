<?php

// get all resources

$files = scandir('resources');
$resources = array();
foreach ($files as $file) {
  if ($file[0] != '.') {
    $name = preg_replace('/\.[^.]*$/', '', $file);
    $resources[$name] = 'resources/'. $file;
  }
}

$news = explode("\n", file_get_contents('allnews.txt'));

foreach ($resources as $name => $file) {
  $words = explode("\n", file_get_contents($file));
  foreach ($words as $word) {
    foreach ($news as $pos => $new) {
      $news[$pos] = str_replace($word, '§'. $name, $new);
    }
  }
}

foreach ($news as $item) {
  print ($item ."\n");
}

?>
