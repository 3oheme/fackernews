<?php

function fakenew_company_buys_company() {
  $company1 = _company();
  $company2 = _company();
  $price = rand(1,20);
  $title ='Breaking news: '. $company1 .' buys '. $company2 .' for $'. $price .'K';
  $url = _url();
  return array('title' => $title, 'url' => $url);
}

function fakenew_improve_your_website() {
  $title = 'Improve your website just adding '. _verb() .'.js';
  $url = _url();
  return array('title' => $title, 'url' => $url);
}


function _verb() {
  $input_file = 'verbs.txt';
  $names = explode("\n", file_get_contents($input_file));
  return $names[rand(0, count($names)-1)];
}

function _company() {
  $input_file = 'companies.txt';
  $names = explode("\n", file_get_contents($input_file));
  return $names[rand(0, count($names)-1)];
}

function _url() {
  $input_file = 'urls.txt';
  $urls = explode("\n", file_get_contents($input_file));
  return $urls[rand(0, count($urls)-1)];
}

function _user_name() {
  $input_file = 'users.txt';
  $names = explode("\n", file_get_contents($input_file));
  return $names[rand(0, count($names)-1)];
}




?>
