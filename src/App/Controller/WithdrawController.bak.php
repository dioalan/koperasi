<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;


class WithdrawController extends AppController
{


       public function mapRoute(){
        parent::mapRoute();

        $this->map('/:id/pdf', 'pdf')->via('GET', 'POST');
    }

    // public function pdf ($id) {

    //     $collection = Norm::factory('User')->findOne(array('$id' => $id));
    //     $this->data['collection'] = $collection;
    //     // var_dump($collection);exit();

    //     $dompdf = new Dompdf();
    //     $template = $this->app->theme->partial('pdf/kwitansi_simpanan', array(
    //         'collection' => $collection, 
           
    //     ));
       
    //     $dompdf->setPaper('B5', 'landscape');
    //     $dompdf->loadHtml($template);
    //     $dompdf->render();
    //     $dompdf->stream('kwitansi_simpanan.pdf', array("Attachment" => false));
    //     exit;
    // }

    public function create()
    {
        $entry = $this->collection->newInstance()->set($this->getCriteria());

        $this->data['entry'] = $entry;

        if ($this->request->isPost()) {

            try {
                $post = $this->request->getBody();
                $data_simpanan = Norm::factory('DataSimpanan')->findOne(array('nik' => $post['nik']));

                if ($post['jenis'] == 1) {
                    if ($data_simpanan['jumlah_wajib'] < $post['jumlah'])  {
                        $alert = "Saldo Simpanan Wajib Tidak Cukup";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                    }else{
                        $simpananWajib = str_replace(',', '', $data_simpanan['jumlah_wajib']);
                        $total_wajib = $simpananWajib - $post['jumlah'];
                        $data_simpanan->set('jumlah_wajib', number_format($total_wajib));

                    }
                }elseif ($post['jenis'] == 2) {
                    if ($data_simpanan['jumlah_pokok'] < $post['jumlah']) {
                        $alert = "Saldo Simpanan Pokok Tidak Cukup";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                    }else{
                        $simpananPokok = str_replace(',', '', $data_simpanan['jumlah_pokok']);
                        $total_pokok = $simpananPokok - $post['jumlah'];
                        $data_simpanan->set('jumlah_pokok',number_format($total_pokok));
                    }
                }elseif ($post['jenis'] == 3) {
                    if ($data_simpanan['jumlah_qurban'] < $post['jumlah']) {
                        $alert = "Saldo Simpanan Qurban Tidak Cukup";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                    }else{
                        $simpanan_qurban = str_replace(',', '', $data_simpanan['jumlah_qurban']);
                        $total_qurban = $simpanan_qurban - $post['jumlah'];
                        $data_simpanan->set('jumlah_qurban',number_format($total_qurban));
                        // var_dump($simpanan_qurban);
                        // var_dump($post['jumlah']);
                        // var_dump($total_qurban);
                        // exit();
                    }
                }elseif ($post['jenis'] == 4) {
                    if ($data_simpanan['jumlah_umrah'] < $post['jumlah']) {
                        $alert = "Saldo Simpanan Umrah Tidak Cukup";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                    }else{
                        $simpanan_umrah = str_replace(',', '', $data_simpanan['jumlah_umrah']);
                        $total_umrah = $simpanan_umrah - $post['jumlah'];
                        $data_simpanan->set('jumlah_umrah',number_format($total_umrah));
                    }
                }elseif ($post['jenis'] == 5) {
                    if ($data_simpanan['jumlah_haji'] < $post['jumlah']) {
                        $alert = "Saldo Simpanan Haji Tidak Cukup";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                    }else{
                        $simpanan_haji = str_replace(',', '', $data_simpanan['jumlah_haji']);
                        $total_haji = $simpanan_haji - $post['jumlah'];
                        $data_simpanan->set('jumlah_haji',number_format($total_haji));

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

   

    

    

}



