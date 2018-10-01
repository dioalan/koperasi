<?php

use Norm\Schema\NormString;
use App\Schema\Password;
use App\Schema\RoleArray;
use App\Schema\SelectTwoReference;
use App\Schema\MultiReference;
use App\Schema\DatePicker;

return array(
    'schema' => array(
        'nik' => NormString::create('nik')->filter('trim|required|unique:User,nik')->set('list-column', true),
        'first_name' => NormString::create('first_name')->filter('trim|required')->set('list-column', true),
        'last_name' => NormString::create('last_name')->filter('trim|required'),
        'username' => NormString::create('username')->filter('trim|required')->set('list-column', true),
        // 'normalized_username' => NormString::create('normalized_username')->filter('trim')->set('list-column', false)->set('hidden',true),
        'email' => NormString::create('email')->filter('trim|required')->set('list-column', true),
        'password' => Password::create('password')->filter('trim|confirmed|salt'),
        'birthday' => DatePicker::create('birthday')->filter('trim'),
        'gender'      => SelectTwoReference::create('gender')->filter('trim|required')->to(
            array(
                    '1' => 'Laki-laki',
                    '2' => 'Perempuan', 
                    ))->set('list-column', true),
        // 'gender' => NormString::create('gender')->filter('trim')->set('list-column', true),

        'mobile_phone' => NormString::create('mobile_phone')->filter('trim')->set('list-column', true),
        'address' => NormString::create('address')->filter('trim'),
        'role'    => MultiReference::create('role')->to('Role', '$id', 'name')->set('list-column', true),
    ),
);