<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;
use App\Library\HtmlExcel;



class SimpananController extends AppController
{


       public function mapRoute(){
        parent::mapRoute();

        $this->map('/:id/pdf', 'pdf')->via('GET', 'POST');
        $this->map('/laporan_simpanan/export', 'laporan')->via('GET', 'POST');

        $this->map('/null/export', 'export')->via('GET', 'POST');

    }

    public function pdf ($id) {

        // var_dump('sasa');exit();


        $model_simpanan = Norm::factory('Simpanan')->findOne(array('$id' => $id));
        $model_user = Norm::factory('User')->findOne(array('nik' => $model_simpanan['nik']));

        $this->data['model_simpanan'] = $model_simpanan;
        $this->data['model_user'] = $model_user;
        
        // var_dump($model_simpanan['nik']);
        // var_dump($model_user['first_name']);
        // exit();

       
        $session = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];
        // var_dump($session);exit();

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/kwitansi_simpanan', array(
            'model_simpanan' => $model_simpanan,
            'model_user' => $model_user, 
            'session' => $session


           
        ));
       
        $dompdf->setPaper('B5', 'landscape');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('kwitansi_simpanan.pdf', array("Attachment" => false));
        exit;
    }



    public function create()
    {
        $entry = $this->collection->newInstance()->set($this->getCriteria());

        $this->data['entry'] = $entry;

        if ($this->request->isPost()) {

            try {
                $post = $this->request->getBody();
                // var_dump($post);exit();
                $result = $entry->set($post)->save();
                $data_simpanan = Norm::factory('DataSimpanan')->newInstance();

                
                $data_simpanan = Norm::factory('DataSimpanan')->findOne(array('nik' => $post['nik']));
                // $data_user = Norm::factory('User')->findOne(array('nik' => $post['nik']));
                
                // $simpanan = str_replace(',', '', $data_simpanan['jumlah_wajib']);
                // var_dump($post['jumlah']);
                // var_dump($simpanan);
                //         $total_wajib = $simpanan + $post['jumlah'];
                //         var_dump($total_wajib);
                //         exit();

                $data_simpanan->set('nik', $post['nik']);
                // $data_simpanan->set('first_name', $post['first_name']);
                // $data_simpanan->save();


                if ($post['jenis'] == 1) {
                    if ($data_simpanan['jumlah_wajib'] != '') {
                        $simpananWajib = $data_simpanan['jumlah_wajib'];
                        $total_wajib = $simpananWajib + $post['jumlah'];
                        $data_simpanan->set('jumlah_wajib', $total_wajib);
                    }else{
                        $data_simpanan->set('jumlah_wajib', $post['jumlah']);
                    }
                }elseif ($post['jenis'] == 2) {
                    if ($data_simpanan['jumlah_sukarela'] != '') {
                        $simpananPokok = $data_simpanan['jumlah_sukarela'];
                        $total_pokok = $simpananPokok + $post['jumlah'];
                        $data_simpanan->set('jumlah_sukarela',$total_pokok);
                    }else{
                        $data_simpanan->set('jumlah_sukarela',$post['jumlah']);
                    }
                }elseif ($post['jenis'] == 3) {
                    if ($data_simpanan['jumlah_qurban'] != '') {
                        $simpanan_qurban = $data_simpanan['jumlah_qurban'];
                        $total_qurban = $simpanan_qurban + $post['jumlah'];
                        $data_simpanan->set('jumlah_qurban',$total_qurban);
                    }else{
                        $data_simpanan->set('jumlah_qurban', $post['jumlah']);
                    }
                }elseif ($post['jenis'] == 4) {
                    if ($data_simpanan['jumlah_umrah'] != '') {
                        $simpanan_umrah = $data_simpanan['jumlah_umrah'];
                        $total_umrah = $simpanan_umrah + $post['jumlah'];
                        $data_simpanan->set('jumlah_umrah',$total_umrah);
                    }else{
                        $data_simpanan->set('jumlah_umrah',$post['jumlah']);
                    }
                }elseif ($post['jenis'] == 5) {
                    if ($data_simpanan['jumlah_haji'] != '') {
                        $simpanan_haji = $data_simpanan['jumlah_haji'];
                        $total_haji = $simpanan_haji + $post['jumlah'];
                        $data_simpanan->set('jumlah_haji',$total_haji);
                    }else{
                        $data_simpanan->set('jumlah_haji',$post['jumlah']);
                    }
                }
                $data_simpanan->save();

                h('notification.info', $this->clazz.' created.');

                h('controller.create.success', array(
                    'model' => $entry
                ));
            } catch (Stop $e) {
                throw $e;
            } catch (Exception $e) {
                // no more set notification.error since notificationmiddleware will
                // write this later
                // h('notification.error', $e);

                h('controller.create.error', array(
                    'model' => $entry,
                    'error' => $e,
                ));

                // rethrow error to make sure notificationmiddleware know what todo
                throw $e;
            }
            $this->app->redirect('simpanan');
        }

    }
        public function export() {

        $a = $this->collection->find();
        var_dump(count($a));exit();
        $collection = \Norm::factory('Simpanan')->find();
        $template = $this->app->theme->partial('excel/export',
                array(
                    'collection' => $collection
                )
        );

        $xls = new HtmlExcel();
        // var_dump('expression');exit();
        // $xls->setCss($css);
        $xls->addSheet("Worksheet", $template);
        $xls->headers();
        echo $xls->buildFile();
        exit;
    }

     public function laporan () {


        $model_simpanan = Norm::factory('Simpanan')->find();
        

       
        $session = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];
        // var_dump($session);exit();

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/laporan_simpanan', array(
            'model_simpanan' => $model_simpanan,
            // 'model_user' => $model_user, 
            // 'session' => $session


           
        ));
       
        $dompdf->setPaper('A4', 'portait');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('laporan_simpanan.pdf', array("Attachment" => false));
        exit;
    }

   

    

    

}



