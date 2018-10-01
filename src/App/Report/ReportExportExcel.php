<?php
namespace App\Report;

use Norm\Norm;
use \Bono\Helper\URL;
use PHPExcel;
use PHPExcel_Settings;
use PHPExcel_Worksheet_PageSetup;
use PHPExcel_Worksheet_Drawing;
use Bono\App;
use \ROH\Util\Inflector;
use PHPExcel_Style_Fill;
use PHPExcel_Style_Border;
use PHPExcel_Style_Alignment;
use \Norm\Schema\String;
use \Norm\Schema\Reference;
use App\Schema\SysparamReference;
use \App\Schema\SysParamCustom;
use App\Schema\SelectTwoReference;
use \ZipArchive;

class ReportExportExcel{
 protected $countQty;
 public static function create($app){
  return new ReportExportExcel($app);
 }

    public function exportData($schema, $datas, $nameTable)
    {
        $objexcel = new PHPExcel();

        $titleStyle = array(
            'font' => array(
                'name'  => 'Arial',
                'size' => 15,
                'bold' => true
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('rgb' => 'FF000000')
                )
            ),
            'alignment' => array(
                'horizontal' => 'center'
            ),
        );

        $theadStyle = array(
            'font' => array(
                'name'  => 'Arial',
                'size' => 13
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => 'CCCCCC')
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('rgb' => 'FF000000')
                )
            ),
            'alignment' => array(
                'horizontal' => 'center'
            )
        );

        $tbodyStyle = array(
            'font' => array(
                'name'  => 'Arial',
                'size' => 12
            ),
            'alignment' => array(
                'horizontal' => 'left'
            ),    
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('rgb' => 'FF000000')
                )
            )
        );

        $boldStyle = array(
            'font' => array(
                'bold' => true
            )
        );

        $contentStyle = array(
            'font' => array(
                'name'  => 'Arial',
                'size' => 11
            ),
           
            'alignment' => array(
                'horizontal' => 'center'
            )
        );



        $cell = 'A';
        foreach ($schema as $key => $label) {
            $objexcel->getActiveSheet()->SetCellValue($cell.'3', $label['label']);

            $cell++;
        }

        // $objexcel->getActiveSheet()->SetCellValue('A3', "Gedung");
        $cellLabel = 'A';
        while($cellLabel != 'ZZ')
        {
            $values[] = $cellLabel++;
        }
        $values[] = $cellLabel;


        $cellPrevious = chr(ord($cell)-1);
        if ($cellPrevious == '@') {
         $cellPrevious = $values[array_search($cell, $values)-1];
        }


        $tgl = date('d M Y');
        $content = 'Jakarta,'.' '.$tgl;
        $objexcel->getActiveSheet()->getStyle('A3:'.$cellPrevious.'3')->applyFromArray($theadStyle);
        $objexcel->getActiveSheet()->SetCellValue('A4','');



        $objexcel->getActiveSheet()->mergeCells('A2:'.$cellPrevious.'2');
        $objexcel->getActiveSheet()->getStyle('A2')->applyFromArray($titleStyle);
        $objexcel->getActiveSheet()->SetCellValue('A2', 'Laporan'.' '.$nameTable);

        $objexcel->getActiveSheet()->mergeCells('C20:'.$cellPrevious.'20');
        $objexcel->getActiveSheet()->getStyle('C20')->applyFromArray($contentStyle);
        $objexcel->getActiveSheet()->SetCellValue('C20',$content);

        $objexcel->getActiveSheet()->mergeCells('C21:'.$cellPrevious.'21');
        $objexcel->getActiveSheet()->getStyle('C21')->applyFromArray($contentStyle);
        $objexcel->getActiveSheet()->SetCellValue('C21','Mengetahui');

        $objexcel->getActiveSheet()->mergeCells('C26:'.$cellPrevious.'26');
        $objexcel->getActiveSheet()->getStyle('C26')->applyFromArray($contentStyle);
        $objexcel->getActiveSheet()->SetCellValue('C26','Ketua Koperasi');






        

        foreach (range('A',$cellPrevious) as $i) {
            $objexcel->getActiveSheet()->getColumnDimension($i)->setAutoSize(true);
        }

        // echo "<pre>";
        // print_r($nameTable);exit();
        $noCell = 4;
        foreach ($datas as $kd => $data) {
         $objexcel->getActiveSheet()->getStyle('A'.$noCell.':'.$cellPrevious.$noCell)->applyFromArray($tbodyStyle);

            if (count($schema)) {
             $cellAtt = 'A';
             foreach ($schema as $name => $field) {
           $objexcel->getActiveSheet()->SetCellValue($cellAtt.$noCell, $data->format($name));

              $cellAtt++;
             }
            }

         $noCell++;
        }

        $objWriter = \PHPExcel_IOFactory::createWriter($objexcel, 'Excel2007');

        $objWriter->save('./storage/'.$nameTable.'.xlsx');
        header('Location:'.URL::base('storage/'.$nameTable.'.xlsx'));
        exit();
    }

    public function exportTamu($data, $name)
    {
        var_dump($data);exit();
    }
}