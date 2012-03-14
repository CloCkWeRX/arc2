<?php
class ARC2_Factory {

    /** @todo - Replace with Net_URL / Net_URL2? */
    public function getScriptURI() {
        if (isset($_SERVER) && (isset($_SERVER['SERVER_NAME']) || isset($_SERVER['HTTP_HOST']))) {
            $proto = preg_replace('/^([a-z]+)\/.*$/', '\\1', strtolower($_SERVER['SERVER_PROTOCOL']));
            $port = $_SERVER['SERVER_PORT'];
            $server = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
            $script = $_SERVER['SCRIPT_NAME'];

            /* https */
            if (($proto == 'http') && $port == 443) {
                $proto = 'https';
                $port = 80;
            }

            return $proto . '://' . $server . ($port != 80 ? ':' . $port : '') . $script;
            /*
            return preg_replace('/^([a-z]+)\/.*$/', '\\1', strtolower($_SERVER['SERVER_PROTOCOL'])) .
                '://' . $_SERVER['SERVER_NAME'] .
                ($_SERVER['SERVER_PORT'] != 80 ? ':' . $_SERVER['SERVER_PORT'] : '') .
                $_SERVER['SCRIPT_NAME'];
            */
        } elseif (isset($_SERVER['SCRIPT_FILENAME'])) {
            return 'file://' . realpath($_SERVER['SCRIPT_FILENAME']);
        }

        return 'http://localhost/unknown_path';
    }
}