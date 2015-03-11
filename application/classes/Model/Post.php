<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Post extends ORM {

    protected $_belongs_to = array(
        'user'  => array(
            'model'       => 'User',
            'foreign_key' => 'user_id',
        )
    );
}