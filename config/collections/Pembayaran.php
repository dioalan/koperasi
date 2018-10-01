<?php

use Norm\Schema\NormString;
use Norm\Schema\NormInteger;
use App\Schema\SelectTwoReference;
use App\Schema\DatePicker;


return array(
    'schema' => array(

        'nik'     => SelectTwoReference::create('nik','NIK Member')->to('User', 'nik','nik')->set('list-column', true),
        'jumlah_pembayaran' => NormString::create('jumlah_pembayaran')->set('list-column', true),
        'tanggal' => DatePicker::create('tanggal')->setformatdate('dd/mm/yyyy')->set('list-column',true),
    ),
);