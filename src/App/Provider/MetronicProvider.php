<?php

namespace App\Provider;

class MetronicProvider extends \Bono\Provider\Provider
{
    public function initialize()
    {
        $app = $this->app;

        $app->get('/global-search',function() use($app){
        	$app->response->template('global-search');
        });


        $app->get('/metronic/upload_file', function() use($app){
            $this->uploadFile($app);
        });


        $app->post('/metronic/upload_file', function() use($app){
            $this->uploadFile($app);
        });
        
    }


     private function uploadFile($app){

    	$base_dir  = $this->options['Upload_Directory'];
        $bucket = $this->options['bucket'];
        $path = $base_dir . '/';

        if(!empty($_GET['bucket'])){
            $bucket = $_GET['bucket'];
        }

        $path .= $bucket .'/';

		if (!file_exists($path)) {
		    mkdir($path, 0766, true);
		}

		$uploaded = array();

		foreach ($_FILES as $k => $value) {
			$tmp_file = $value['tmp_name'];
            $mimetype = $value['type'];
            $filename = $value['name'];
            $extension = explode('.',$filename);
            $randomfile = md5($filename.rand(1,99999).time()).'.'.$extension[count($extension)-1];
            move_uploaded_file($tmp_file, $path.$randomfile);
            $model = array('name'=>$filename,'filename'=>$randomfile,'bucket'=>$bucket,'mime_type' => $mimetype);
            $uploaded[] = $model;
		}

        $app->response->data($uploaded);


    }
}
