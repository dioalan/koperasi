<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use \App\Report\ReportExportExcel;
use ROH\Util\Inflector;


class AppController extends NormController
{
    public function mapRoute(){
        parent::mapRoute();
        $this->map('/null/export_csv', 'export_csv')->via('GET', 'POST');
        $this->map('/null/export_excel', 'export_excel')->via('GET', 'POST');

    }

    public function getLimitExport(){
        $limit = $this->request->get('!limit');

        return $limit;
    }
  

    public function getSearch(){

        $search = $this->request->get('!search');

        if($search){
            $schema =  $this->collection->schema();
            $dtsearch = array();
            foreach ($schema as $value) {
                if($value->get('name')[0] !='$'){
                    if($value->get('list-column')){
                        $dtsearch[] = array($value->get('name').'!like' => $search);
                    }
                }
            }

            $search = array('!or' => $dtsearch);

        }else{
            $search = array();
        }

        return $search;
    }

    public function getSort(){
        $sort = parent::getSort();
        if(empty($sort)){
            $sort['$created_time'] = -1;
        }
        return $sort;
    }

    public function getCriteria(){
        $criteria = parent::getCriteria();

        $criteria = array_merge($criteria,$this->getSearch());

        return $criteria;
    }

    public function export_csv(){

        $entries = $this->collection->find($this->getCriteria())
                    ->limit($this->getLimitExport())
                    ->skip($this->getSkip())
                    ->sort($this->getSort());

        $schema = $this->collection->schema();
        $field = $this->generateField($schema);
        $f = fopen('php://memory', 'w'); 

        fputcsv($f,array_values($field),',');
        
        foreach ($entries as $key => $value) {
            fputcsv($f,$this->generateRow($value,$field),',');
        }

        fseek($f, 0);

        header('Content-Type: application/csv');
        // tell the browser we want to save it instead of displaying it
        header('Content-Disposition: attachment; filename="'.$this->clazz.'.csv";');
        fpassthru($f);

        exit();
        

    }

    private function generateField($schema){

        $field = array();

        foreach ($schema as $key => $value) {
            if ($value['list-column']) {
                $field[$key]=str_replace('$','',str_replace('*','',$value->label(true)));
            }
        }

        return $field;
    }

    private function generateRow($model,$field){
        $row = array();
        foreach ($field as $name => $value) {
            try{
                if($model->format($name) instanceof \Norm\Type\DateTime){
                    $row[] = date('Y-m-d H:i:s' ,strtotime($model->format($name)->__toString()));
                    continue;
                }
                $row[] = $model->format($name);
            }catch(\Exception $e){
                $row[] ='';
            }
        }
        return $row;
    }

    public function export_excel()
    {
        $post = $this->request->post();
        $get = $this->request->get();

        // var_dump($get);exit();

        $dataReport = $this->collection->find($get);

        $name = ucwords(l('{0}', Inflector::humanize(f('controller')->getClass())));
        
        $schema = array();
        foreach (f('controller')->schema() as $key => $field) {
            if ($field['list-column']) {
                $schema[$key] = $field;
            }
        }
        //memanggil libraryReportExportExcel
        $report = ReportExportExcel::create($this->app);

        //format data yang akan di export
        $report->exportData($schema, $dataReport, $name);
    }

    

    
}
