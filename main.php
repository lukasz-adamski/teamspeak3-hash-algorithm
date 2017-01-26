<?php

/**
 * @author Adams <lukasz.adamski@eterprime.eu>
 * @license MIT
 */

if (! function_exists('teamspeak3_hash')) {
    /**
     * Outputs TeamSpeak3 password hash stored in server
     * database to protect ServerQuery connections.
     *
     * @param $string String to hash
     * @return string
     */
    function teamspeak3_hash($string)
    {
        return base64_encode(sha1($string, true));
    }
}

if (PHP_SAPI == 'cli') {
    if ($argc != 2)
        die('Usage: php ' . $argv[0] . ' <string>' . PHP_EOL);

    list($_, $string) = $argv;

    print teamspeak3_hash($string) . PHP_EOL;
}
