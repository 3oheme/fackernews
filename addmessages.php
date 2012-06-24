<?php

include 'omgnews.php';

print_news_better_style(30);

function load_all_news() {
  $news = explode("\n", file_get_contents('allnews.txt'));
  return $news;
}

function gimme_one_new($all_news) {
  return $all_news[rand(0, count($all_news)-1)];
} 

function load_all_resources() {
  $files = scandir('resources');
  $resources = array();
  foreach ($files as $file) {
    if ($file[0] != '.') {
      $name = preg_replace('/\.[^.]*$/', '', $file);
      $resources[$name] = 'resources/'. $file;
    }
  }
  return $resources;
}

function change_items_for_tokens(&$new, $resources) {
  foreach ($resources as $name => $file) {
    $words = explode("\n", file_get_contents($file));
    foreach ($words as $word) {
      $new = str_replace($word, '§'. $name, $new);
    }
  }
}

function there_are_any_token($new) {
  return strpos($new, '§') !== FALSE ? TRUE : FALSE;
}

function change_tokens_for_funny_stuff($string, $tokens) {
  foreach ($tokens as $token => $resource) {
    $string = preg_replace('/§'. $token .'/', call_user_func('_'. $token), $string, 1);
  }
  return $string;
}

function parse_and_replace_tokens(&$new) {
  $resources = load_all_resources();
  change_items_for_tokens($new, $resources);
  if (there_are_any_token($new)) {
    while (there_are_any_token($new)) {
      $new = change_tokens_for_funny_stuff($new, $resources);
    }
    return TRUE;
  }
}

function print_news_better_style($number) {
  $all_news = load_all_news();
  $i = 0;
  while ($i < $number) {
    $new = gimme_one_new($all_news);
    if (parse_and_replace_tokens($new)) {
      $i = $i + 1;
      theme_new($new, _urls(), $i);
    }
  }
}

function theme_new($name, $url, $position) {

  $timeago = rand(1,3);
  $points = rand(0, 500);
  $comments = rand(0, 140);
  $username = _users();
	print '
	<tr>
    <td align="right" valign="top" class="title">'. $position .'.</td>
    <td>
      <center>
        <a id="up_4073162" href="http://www.example.com"><img src="./files/grayarrow.gif" border="0" vspace="3" hspace="2"></a><span id="down_4073162"></span>
      </center>
    </td>
    <td class="title">
      <a href="http://www.example.com">'. $name .'</a> <span class="comhead">('. $url .')</span>
    </td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td class="subtext buffer-inserted">
      <span id="score_4073162">'. $points .' points</span> by <a href="http://www.example.com">'. $username .'</a> '. $timeago .' hour ago | <a href="http://news.ycombinator.com/item?id=4073162">'. $comments . ' comments</a>
    </td>
  </tr>
  <tr style="height:5px">
    <td></td>
  </tr>';
}

?>
