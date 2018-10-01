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

        'nik' => NormString::create('nik','NIK Member')->set('list-column', true),
        'first_name' => NormString::create('first_name')->set('list-column', true),
        'jumlah_wajib'=> NormInteger::create('jumlah_wajib','Jumlah Simpanan Wajib')->set('list-column', true),
        'jumlah_sukarela'=> NormInteger::create('jumlah_sukarela','Jumlah Simpanan Sukarela')->set('list-column', true),
        'jumlah_qurban'=> NormInteger::create('jumlah_qurban','Jumlah Simpanan Qurban')->set('list-column', true),
        'jumlah_umrah'=> NormInteger::create('jumlah_umrah','Jumlah Simpanan Umrah')->set('list-column', true),
        'jumlah_haji'=> NormInteger::create('jumlah_haji','Jumlah Simpanan Haji')->set('list-column', true),
        // 'tanggal' => DatePicker::create('tanggal')->setformatdate('dd/mm/yyyy')->set('list-column',true),
    ),
);