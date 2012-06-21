<?php

$xml = simplexml_load_file("news.xml");

$myarray = array();

foreach ($xml->channel->item as $item) {
  print strval($item->title) ."\n";
}

?>
