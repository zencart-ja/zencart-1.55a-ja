<?php

/**
  * is Furikana nesessary?
**/
if (defined('FURIKANA_NECESSARY_COUNTRIES') &&
  !is_bool(strpos(strtolower(FURIKANA_NECESSARY_COUNTRIES), strtolower($_SESSION['language'])))){
  define('FURIKANA_NESESSARY', true);    
} else {
  define('FURIKANA_NESESSARY', false);
}

