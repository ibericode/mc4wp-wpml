<?php

add_filter( 'mc4wp_lists', function( $list_ids ) {
  $opts = mc4wp_wpml_get_options();
  $language_map = $opts['language_map'];
  $language_code = ICL_LANGUAGE_CODE;

  if( ! empty( $language_map[$language_code] ) ) {
    return array( $language_map[ $language_code ] );
  }

  // no list in language map, use defaults (from form or integration setting)
  return $list_ids;
});
