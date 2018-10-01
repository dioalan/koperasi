<?php

use Norm\Schema\NormString;
use Norm\Schema\NormInteger;
use App\Schema\SelectTwoReference;
use App\Schema\DatePicker;


return array(
    'schema' => array(

        'nik'     => SelectTwoReference::create('nik','NIK Member')->filter('trim|required')->to('User', 'nik','nik')->set('list-column', true),
        // 'nik'     => SelectTwoReference::create('nik','NIK Member')->filter('trim|required|unique:Pinjaman,nik')->to('User', '$id','nik')->set('list-column', true),
        'jumlah_pinjam' => NormString::create('jumlah_pinjam','Jumlah Pinjaman')->set('list-column', true),
        // 'bunga' => NormInteger::create('bunga','Bunga % Per Tahun')->set('list-column', true),

        'tenor'      => SelectTwoReference::create('tenor' , 'Tenor (bulan)')->filter('trim|required')->to(
            array(
                    '01' => '6',
                    '02' => '12',
                    '03' => '18', 
                    '04' => '24', 
                    '05' => '36', 
                    '06' => '48', 
                    ))->set('list-column', true),
       
        'biaya_adm' => NormString::create('biaya_adm','Biaya Administrasi Perbulan')->set('list-column', true),
        'ket' => NormString::create('ket','Keterangan')->set('list-column', true),
        'tanggal' => DatePicker::create('tanggal','Tangggal Pinjaman')->filter('trim|required')->setformatdate('dd/mm/yyyy')->set('list-column',true),
        // 'status'      => NormString::create('status')->set('list-column', true)->set('hidden', true),
        'status'      => NormString::create('status')->set('list-column', true),

       
    ),
);