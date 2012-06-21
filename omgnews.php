<?php

function fakenew_company_buys_company() {
  return 'Breaking news: '. _companies() .' buys '. _companies() .' for $'. rand(1,9) .'00 K';
}

function fakenew_improve_your_website() {
  return 'Improve your website just adding '. _verbs() .'.js';
}

function fakenew_x_things_u_didnt_know() {
  return rand(5,10) ." things you didn't know about ". _techniques();
}

function fakenew_using_x_to_build_y() {
  return 'Using '. _techniques() .' to build the new '. _platforms();
}

function fakenew_x_sucks() {
  return _techniques() .' sucks for creative work. Heres an alternative system.';
}

function fakenew_open_source_library() {
  return _verbs() .' - The '. _companies() .' open source library';
}

function fakenew_good_startup() {
  return _ceo() .' '. rand(5,10) .' Notes for a good startup';
}

function fakenew_startup_creating_social_network() {
  return 'A '. _companis() .' startup called '. _users() .' is trying to create the new social network';
}

function fakenew_show_hn_design() {
  return 'Show HN: '. _verbs() .'.io - Get feedback on your designs with visual annotations';
}

function fakenew_speed_up_url() {
  return 'Our experience using '. _techniques() .' to speed up '. _url();
}

function fakenew_porting_program() {
  return 'Designing '. _applications() .' for '. _os();
}

function fakenew_program_obsolete() {
  return _applications() .' Will Soon Be Obsolete';
}

function fakenew_technique_process() {
  return 'Using '. _techniques() .' to process '. rand(1, 9) .' million transactions per second';
}

function fakenew_password_hack() {
  return _companies() .' Confirms Password Hack';
}

function fakenew_why_app_sucks() {
  return 'Why '. _platforms() .' Sucks';
}

function fakenew_change_password() {
  return 'Change your '. _urls() .' password';
}

function fakenew_lost_way() {
  return 'Ask HN: Do you think '. _os() .' has lost its way?';
}

function fakenew_explaining() {
  return 'Using '. _languages() .' for '. _techniques();
}

function fakenew_release_amazing() {
  return _verbs() .'.js v'. rand(0,20) .'.'. rand(0,9) .' is out and is '. _adjetives();
}

// ============================== 

function gimmerandomfromfile($file) {
  $input_file = $file;
  $names = explode("\n", file_get_contents($input_file));
  $output = '';
  while (empty($output)) {
    $output = $names[rand(1, count($names)-1)];
  }  
  return $output;
}

function _verbs() { return gimmerandomfromfile('resources/verbs.txt'); }
function _ceo() { return gimmerandomfromfile('resources/ceo.txt'); }
function _tools() { return gimmerandomfromfile('resources/tools.txt'); }
function _techniques() { return gimmerandomfromfile('resources/techniques.txt'); }
function _platforms() { return gimmerandomfromfile('resources/platforms.txt'); }
function _languages() { return gimmerandomfromfile('resources/languages.txt'); }
function _companies() { return gimmerandomfromfile('resources/companies.txt'); }
function _os() { return gimmerandomfromfile('resources/os.txt'); }
function _applications() { return gimmerandomfromfile('resources/applications.txt'); }
function _urls() { return gimmerandomfromfile('resources/urls.txt'); }
function _users() { return gimmerandomfromfile('resources/users.txt'); }
function _adjetives() { return gimmerandomfromfile('resources/adjetives.txt'); }
function _countries() { return gimmerandomfromfile('resources/countries.txt'); }

?>
