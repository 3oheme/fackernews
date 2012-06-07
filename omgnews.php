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

function fakenew_x_things_u_didnt_know() {
  $things = rand(5,10);
  $title = $things ." things you didn't know about ". _technique();
  $url = _url();
  return array('title' => $title, 'url' => $url);
}

function fakenew_using_x_to_build_y() {
  $title = 'Using '. _technique() .' to build the new '. _platform();
  $url = _url();
  return array('title' => $title, 'url' => $url);
}

function fakenew_x_sucks() {
  $title = _technique() .' sucks for creative work. Heres an alternative system.';
  $url = _url();
  return array('title' => $title, 'url' => $url);
}

function fakenew_open_source_library() {
  $title = _verb() .' - The '. _company() .' open source library';
  $url = _url();
  return array('title' => $title, 'url' => $url);
}

function fakenew_good_startup() {
  $title = _ceo() .' '. rand(5,10) .' Notes for a good startup';
  $url = _url();
  return array('title' => $title, 'url' => $url);
}

function fakenew_startup_creating_social_network() {
  $title = 'A '. _company() .' startup called '. _user_name() .' is trying to create the new social network';
  $url = _url();
  return array('title' => $title, 'url' => $url);
}

function fakenew_show_hn_design() {
  $title = 'Show HN: '. _verb() .'.io - Get feedback on your designs with visual annotations';
  $url = _url();
  return array('title' => $title, 'url' => $url);
}

function fakenew_speed_up_url() {
  $title = 'Our experience using '. _technique() .' to speed up '. _url();
  $url = _url();
  return array('title' => $title, 'url' => $url);
}



/* ============================== */

function gimmerandomfromfile($file) {
  $input_file = $file;
  $names = explode("\n", file_get_contents($input_file));
  return $names[rand(1, count($names)-1)];
}

function _verb() { return gimmerandomfromfile('verbs.txt'); }
function _ceo() { return gimmerandomfromfile('ceo.txt'); }
function _tool() { return gimmerandomfromfile('tools.txt'); }
function _technique() { return gimmerandomfromfile('techniques.txt'); }
function _platform() { return gimmerandomfromfile('platforms.txt'); }
function _language() { return gimmerandomfromfile('languages.txt'); }
function _company() { return gimmerandomfromfile('companies.txt'); }
function _url() { return gimmerandomfromfile('urls.txt'); }
function _user_name() { return gimmerandomfromfile('users.txt'); }

?>
