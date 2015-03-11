<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
    'driver'       => 'ORM',
    'hash_method'  => 'sha256',
    'hash_key'     => 'T2CK127xLSeIW6G17f',
    'lifetime'     => 1209600,
    'session_type' => Session::$default,
    'session_key'  => 'auth_user',
);
