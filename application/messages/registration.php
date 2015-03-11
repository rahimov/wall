<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'username'         => array(
        'not_empty'  => __('Enter the user name'),
        'exist_user' => __('The user already exists'),
    ),
    'password'         => array(
        'not_empty' => __('Enter the password'),
        'matches'   => __('The passwords do not match'),
    ),
    'password_confirm' => array(
        'not_empty' => __('Confirm the password'),
    ),
);
