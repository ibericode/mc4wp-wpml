<?php

/**
* @return array
*/
function mc4wp_wpml_get_options() {
  $opts = get_option( 'mc4wp_wpml', array() );
  $defaults = array(
    'language_map' => array(),
    'set_subscriber_language' => 0,
  );
  return array_merge( $defaults, $opts );
}

/**
* @return string
*/
function mc4wp_wpml_get_current_language_code() {
  return (string) apply_filters( 'wpml_current_language', null );
}
