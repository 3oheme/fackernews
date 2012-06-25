<?php

function gimmerandomfromfile($file) {
  $input_file = $file;
  $names = explode("\n", file_get_contents($input_file));
  $output = '';
  while (empty($output)) {
    $output = $names[rand(1, count($names)-1)];
  }  
  return $output;
}

function _browsers() { return gimmerandomfromfile('resources/browsers.txt'); }
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
