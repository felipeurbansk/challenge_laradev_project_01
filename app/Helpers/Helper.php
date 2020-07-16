<?php

if ( ! function_exists('mix_e')) {

    function mix_e($path) {
        return url(mix($path));
    }

    function default_format_date( $datetime ) {
        return date('d/m/Y H:i:s', strtotime($datetime));
    }

}
