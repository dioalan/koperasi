<?php

use Norm\Schema\NormString;
use Norm\Schema\Password;

return array(
    'observers' => array(
        'App\\Observer\\RoleObserver' => null,

    ),
    'schema' => array(
        'name'   => NormString::create('name')->filter('trim|required|unique:Role,name')->set('list-column', true),
    ),
);