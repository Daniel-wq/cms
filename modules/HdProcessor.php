<?php
namespace modules;


class HdProcessor {
    public function __call( $name, $arguments ) {
        $instance = WeChat::instance( 'message' );
        call_user_func_array([$instance,$name],$arguments);
    }

}