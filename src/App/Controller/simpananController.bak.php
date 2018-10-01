<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;


class SimpananController extends AppController
{


       public function mapRoute(){
        parent::mapRoute();

        $this->map('/:id/pdf', 'pdf')->via('GET', 'POST');
    }

    public function pdf ($id) {

        $collection = Norm::factory('User')->findOne(array('$id' => $id));
        $this->data['collection'] = $collection;
        // var_dump($collection);exit();

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/kwitansi_simpanan', array(
            'collection' => $collection, 
           
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
                $result = $entry->set($post)->save();
                
                $data_simpanan = Norm::factory('DataSimpanan')->findOne(array('nik' => $post['nik']));
                // $simpanan = str_replace(',', '', $data_simpanan['jumlah_wajib']);
                // var_dump($post['jumlah']);
                // var_dump($simpanan);
                //         $total_wajib = $simpanan + $post['jumlah'];
                //         var_dump($total_wajib);
                //         exit();


                if ($post['jenis'] == 1) {
                    if ($data_simpanan['jumlah_wajib'] != '') {
                        $simpananWajib = str_replace(',', '', $data_simpanan['jumlah_wajib']);
                        $total_wajib = $simpananWajib + $post['jumlah'];
                        $data_simpanan->set('jumlah_wajib', number_format($total_wajib));
                    }else{
                        $data_simpanan->set('jumlah_wajib', number_format($post['jumlah']));
                    }
                }elseif ($post['jenis'] == 2) {
                    if ($data_simpanan['jumlah_pokok'] != '') {
                        $simpananPokok = str_replace(',', '', $data_simpanan['jumlah_pokok']);
                        $total_pokok = $simpananPokok + $post['jumlah'];
                        $data_simpanan->set('jumlah_pokok',number_format($total_pokok));
                    }else{
                        $data_simpanan->set('jumlah_pokok',number_format($post['jumlah']));
                    }
                }elseif ($post['jenis'] == 3) {
                    if ($data_simpanan['jumlah_qurban'] != '') {
                        $simpanan_qurban = str_replace(',', '', $data_simpanan['jumlah_qurban']);
                        $total_qurban = $simpanan_qurban + $post['jumlah'];
                        $data_simpanan->set('jumlah_qurban',number_format($total_qurban));
                    }else{
                        $data_simpanan->set('jumlah_qurban', number_format($post['jumlah']));
                    }
                }elseif ($post['jenis'] == 4) {
                    if ($data_simpanan['jumlah_umrah'] != '') {
                        $simpanan_umrah = str_replace(',', '', $data_simpanan['jumlah_umrah']);
                        $total_umrah = $simpanan_umrah + $post['jumlah'];
                        $data_simpanan->set('jumlah_umrah',number_format($total_umrah));
                    }else{
                        $data_simpanan->set('jumlah_umrah',number_format($post['jumlah']));
                    }
                }elseif ($post['jenis'] == 5) {
                    if ($data_simpanan['jumlah_haji'] != '') {
                        $simpanan_haji = str_replace(',', '', $data_simpanan['jumlah_haji']);
                        $total_haji = $simpanan_haji + $post['jumlah'];
                        $data_simpanan->set('jumlah_haji',number_format($total_haji));
                    }else{
                        $data_simpanan->set('jumlah_haji',number_format($post['jumlah']));
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

   

    

    

}



