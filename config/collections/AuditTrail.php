<?php

use Norm\Schema\String;
use Norm\Schema\Object;
use Norm\Schema\Text;
use Norm\Schema\Reference;

return array(
    'schema' => array(
        'user' => Reference::create('user')->to('User','$id','first_name')->set('list-column', true),
        'uri' => String::create('uri')->set('list-column', true),
        'method' => String::create('method')->set('list-column', true),
        'data' => Object::create('data')->set('list-column', true),
        'ip_address' => String::create('ip_address')->set('list-column', true),
        'user_agent' => Text::create('user_agent')->set('list-column', true),
        'response' => String::create('response')->set('list-column', true),
        'activity' => String::create('activity')->filter('trim')->set('list-column', true),
    ),
);