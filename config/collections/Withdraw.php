<?php

use Norm\Schema\NormString;
use Norm\Schema\NormInteger;
use App\Schema\Password;
use App\Schema\RoleArray;
use App\Schema\SelectTwoReference;
use App\Schema\MultiReference;
use App\Schema\DatePicker;

return array(
    'schema' => array(

        'nik'     => SelectTwoReference::create('nik','NIK Member')->filter('trim|required')->to('User', 'nik', 'nik')->set('list-column', true),
        'jumlah' => NormInteger::create('jumlah','Jumlah Withdraw')->set('list-column', true),
        'jenis'      => SelectTwoReference::create('jenis','Jenis simpanan')->filter('trim|required')->to(
            array(
                    '1' => 'Sukarela',
                    '2' => 'Qurban',
                    '3' => 'Umrah', 
                    '4' => 'Haji', 

                    ))->set('list-column', true),
        'tanggal' => DatePicker::create('tanggal')->filter('trim|required')->setformatdate('dd/mm/yyyy')->set('list-column',true),

       
    ),
);