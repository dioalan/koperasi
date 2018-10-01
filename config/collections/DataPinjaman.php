<?php

use Norm\Schema\NormString;
use Norm\Schema\NormInteger;
use App\Schema\SelectTwoReference;
use App\Schema\DatePicker;


return array(
    'schema' => array(

       'nik' => NormString::create('nik','NIK Member')->set('list-column', true),
        // 'nik' => NormString::create('nik')->set('list-column', true),

        // 'first_name' => NormString::create('first_name')->set('list-column', true),
        
        'jumlah_pinjam' => NormInteger::create('jumlah_pinjam','Jumlah Pinjaman')->set('list-column', true),
        // 'bunga' => NormInteger::create('bunga','Bunga % Per Tahun')->set('list-column', true),

         'tenor'      => SelectTwoReference::create('tenor')->to(
            array(
                    '01' => '6 Bulan',
                    '02' => '12 Bulan',
                    '03' => '18 Bulan', 
                    '04' => '24 Bulan', 
                    '05' => '36 Bulan', 
                    '06' => '48 Bulan', 
                    ))->set('list-column', true),
       
        'biaya_adm' => NormInteger::create('biaya_adm','Biaya Adm perbulan')->set('list-column', true),
        'ket' => NormString::create('ket','Keterangan')->set('list-column', true),
        'angsuran' => NormInteger::create('angsuran')->set('list-column', true),
        'credit' => NormInteger::create('credit')->set('list-column', true),

        'tanggal' => DatePicker::create('tanggal','Tanggal Pinjam')->setformatdate('dd/mm/yyyy')->set('list-column',true),
        'status'      => NormString::create('status')->set('list-column', true),

        'pinjaman_lalu' => NormString::create('pinjaman_lalu')->set('list-column', false),
       



       
    ),
);