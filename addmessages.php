<?php

include 'omgnews.php';

$allfunctions = get_defined_functions();
$allnews = array();
foreach ($allfunctions['user'] as $key => $item) {
  if (substr($item, 0, 7) == 'fakenew') {
    $allnews[] = $item;
  }
}

for ($i = 1; $i <= 30; $i++) {
  $number = rand(0, count($allnews)-1);
  $new = call_user_func($allnews[$number]);
  theme_new($new['title'], $new['url'], $i);
}

function theme_new($name, $url, $position) {

  $timeago = rand(1,3);
  $points = rand(0, 500);
  $comments = rand(0, 140);
  $username = _user_name();
	print '
	<tr>
    <td align="right" valign="top" class="title">'. $position .'.</td>
    <td>
      <center>
        <a id="up_4073162" href="http://www.example.com"><img src="./Hacker%20News_files/grayarrow.gif" border="0" vspace="3" hspace="2"></a><span id="down_4073162"></span>
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
