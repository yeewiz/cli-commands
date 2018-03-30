<?php

class Foo_Command {
    public function __invoke( $args ) {
        WP_CLI::success( 'hello ' . $args[0] );
    }
}
WP_CLI::add_command( 'foo', 'Foo_Command' );