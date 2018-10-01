<?php

namespace App\Schema;

use Bono\App;
use Norm\Norm;
use Norm\Schema\ReferenceArray;

class MultiReference extends ReferenceArray
{
	public function formatInput($value, $entry = null)
    {
        if(!empty($value)){
            if($value instanceof \Norm\Type\NormArray){
                $value = $value->toArray();
            }
            $datavalue = array();
            foreach ($value as $k => $v) {
                $datavalue[$v]=true;
            }
        }else{
            $datavalue = array();
        }

        return $this->render('_schema/multi_reference/input', array(
            'value' => $datavalue,
            'entry' => $entry,
        ));
    }
}