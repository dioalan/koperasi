<?php

use Norm\Schema\String;
use App\Schema\InputMask;
use App\Schema\Thumbnail;
use App\Schema\FileUpload;
use Norm\Schema\Reference;
use App\Schema\SelectTwoReference;
use App\Schema\MultiReference;
use App\Schema\DatePicker;
use App\Schema\SysparamReference;
use App\Schema\SearchReference;
use Norm\Schema\NormDate;
use Norm\Schema\NormDateTime;
use App\Schema\Password;
use Norm\Schema\NormInteger;


 

return array(
    'schema' => array(
       
        'member'     => SelectTwoReference::create('member','NIK Member')->filter('trim|required')->to('User', '$id','nik')->set('list-column', true),
        'jumlah_sw' => NormString::create('jumlah_sw','Jumlah Simpanan Pokok')->set('list-column', true),
        'jumlah_sp' => NormString::create('jumlah_sp','Jumlah Simpanan Wajib')->set('list-column', true),

        ),
);