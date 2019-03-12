<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;
use App\Library\HtmlExcel;



class WithdrawController extends AppController
{


       public function mapRoute(){
        parent::mapRoute();

        $this->map('/:id/pdf', 'pdf')->via('GET', 'POST');
        $this->map('/laporan_withdraw/export', 'laporan')->via('GET', 'POST');

        $this->map('/null/export', 'export')->via('GET', 'POST');

    }

     public function laporan () {


        $model_withdraw = Norm::factory('Withdraw')->find();
       
        $session = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/laporan_withdraw', array(
            'model_withdraw' => $model_withdraw,

           
        ));
       
        $dompdf->setPaper('A4', 'portait');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('laporan_withdraw.pdf', array("Attachment" => false));
        exit;
    }

    public function pdf ($id) {

        $collection = Norm::factory('User')->findOne(array('$id' => $id));
        $model_withdraw = Norm::factory('Withdraw')->findOne(array('$id' => $id));

        $model_user = Norm::factory('User')->findOne(array('nik' => $model_withdraw['nik']));

        $this->data['model_user'] = $model_user;
        $this->data['collection'] = $collection;
        $this->data['model_withdraw'] = $model_withdraw;


        // var_dump($collection);exit();
        $session = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];


        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/kwitansi_withdraw', array(
            'collection' => $collection, 
            'model_user' => $model_user, 
            'model_withdraw' => $model_withdraw, 
            'session' => $session, 
            


           
        ));
       
        $dompdf->setPaper('B5', 'landscape');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('kwitansi_withdraw.pdf', array("Attachment" => false));
        exit;
    }

    public function create()
    {
        $entry = $this->collection->newInstance()->set($this->getCriteria());

        $this->data['entry'] = $entry;

        if ($this->request->isPost()) {

            try {
                $post = $this->request->getBody();
                $data_simpanan = Norm::factory('DataSimpanan')->findOne(array('nik' => $post['nik']));

                if ($post['jenis'] == 1) {
                    if ($data_simpanan['jumlah_sukarela'] < $post['jumlah'])  {
                        $alert = "Saldo Simpanan Wajib Tidak Cukup";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                    }else{
                        $simpananWajib = $data_simpanan['jumlah_sukarela'];
                        $total_wajib = $simpananWajib - $post['jumlah'];
                        $data_simpanan->set('jumlah_sukarela', $total_wajib);

                    }
                }elseif ($post['jenis'] == 2) {
                    if ($data_simpanan['jumlah_qurban'] < $post['jumlah']) {
                        $alert = "Saldo Simpanan Qurban Tidak Cukup";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                    }else{
                        $simpanan_qurban = $data_simpanan['jumlah_qurban'];
                        $total_qurban = $simpanan_qurban - $post['jumlah'];
                        $data_simpanan->set('jumlah_qurban',$total_qurban);
                    }
                }elseif ($post['jenis'] == 3) {
                    if ($data_simpanan['jumlah_umrah'] < $post['jumlah']) {
                        $alert = "Saldo Simpanan Umrah Tidak Cukup";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                    }else{
                        $simpanan_umrah = $data_simpanan['jumlah_umrah'];
                        $total_umrah = $simpanan_umrah - $post['jumlah'];
                        $data_simpanan->set('jumlah_umrah',$total_umrah);
                    }
                }elseif ($post['jenis'] == 4) {
                    if ($data_simpanan['jumlah_haji'] < $post['jumlah']) {
                        $alert = "Saldo Simpanan Haji Tidak Cukup";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                    }else{
                        $simpanan_haji = $data_simpanan['jumlah_haji'];
                        $total_haji = $simpanan_haji - $post['jumlah'];
                        $data_simpanan->set('jumlah_haji',$total_haji);

                    }
                }
                $data_simpanan->save();
                $entry->set($post)->save();

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
            $this->app->redirect('withdraw');
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

   

    

    

}



