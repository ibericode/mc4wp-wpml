<?php

/**
* @return array
*/
function mc4wp_wpml_get_options() {
  $opts = get_option( 'mc4wp_wpml', array() );
  $defaults = array(
    'language_map' => array(),
  );
  $opts = array_merge( $defaults, $opts );
  return $opts;
}
