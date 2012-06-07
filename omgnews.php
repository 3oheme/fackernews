<?php

function fakenew_company_buys_company() {
  return 'Breaking news: '. _company() .' buys '. _company() .' for $'. rand(1,9) .'00 K';
}

function fakenew_improve_your_website() {
  return 'Improve your website just adding '. _verb() .'.js';
}

function fakenew_x_things_u_didnt_know() {
  return rand(5,10) ." things you didn't know about ". _technique();
}

function fakenew_using_x_to_build_y() {
  return 'Using '. _technique() .' to build the new '. _platform();
}

function fakenew_x_sucks() {
  return _technique() .' sucks for creative work. Heres an alternative system.';
}

function fakenew_open_source_library() {
  return _verb() .' - The '. _company() .' open source library';
}

function fakenew_good_startup() {
  return _ceo() .' '. rand(5,10) .' Notes for a good startup';
}

function fakenew_startup_creating_social_network() {
  return 'A '. _company() .' startup called '. _user_name() .' is trying to create the new social network';
}

function fakenew_show_hn_design() {
  return 'Show HN: '. _verb() .'.io - Get feedback on your designs with visual annotations';
}

function fakenew_speed_up_url() {
  return 'Our experience using '. _technique() .' to speed up '. _url();
}

// ============================== 

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
