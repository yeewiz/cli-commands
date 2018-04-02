<?php

class Foo_Command {
  public function __invoke( $args = array(), $assoc_args = array() ) {
    $arguments = wp_parse_args( $assoc_args, array(
      'start' => '',
      'end' => '',
    ) );
    
    WP_CLI::line( 'yes' );
  }
}

if ( defined( 'WP_CLI' ) && WP_CLI ) {
  WP_CLI::add_command( 'foo', 'Foo_Command' );
}