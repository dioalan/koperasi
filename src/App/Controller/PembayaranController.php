<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;


class PembayaranController extends AppController
{


       public function mapRoute(){
        parent::mapRoute();

        $this->map('/:id/pdf', 'pdf')->via('GET', 'POST');
        $this->map('/laporan_pembayaran/export', 'laporan')->via('GET', 'POST');

    }

    public function laporan () {


        $model_pembayaran = Norm::factory('Pembayaran')->find();
       
        $session = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/laporan_pembayaran', array(
            'model_pembayaran' => $model_pembayaran,

           
        ));
       
        $dompdf->setPaper('A4', 'portait');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('laporan_pembayaran.pdf', array("Attachment" => false));
        exit;
    }

    public function pdf ($id) {

        $model_pembayaran = Norm::factory('Pembayaran')->findOne(array('$id' => $id));
        $model_user = Norm::factory('User')->findOne(array('nik' => $model_pembayaran['nik']));
        $session = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];
        $data_pinjaman = Norm::factory('DataPinjaman')->findOne(array('nik' => $model_pembayaran['nik']));



        $this->data['model_pembayaran'] = $model_pembayaran;
        // var_dump($model_pembayaran);exit();

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/kwitansi_pembayaran', array(
            'model_pembayaran' => $model_pembayaran,
            'model_user' => $model_user, 
            'session' => $session, 
            'data_pinjaman' => $data_pinjaman, 
            

           
        ));
       
        $dompdf->setPaper('B5', 'landscape');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('kwitansi_pembayaran.pdf', array("Attachment" => false));
        exit;
    }

    public function create()
    {
        $entry = $this->collection->newInstance()->set($this->getCriteria());

        $this->data['entry'] = $entry;

        if ($this->request->isPost()) {

            try {
                $post = $this->request->getBody();

                $data_pinjaman = Norm::factory('DataPinjaman')->findOne(array('nik' => $post['nik'], 'status' => 'Pinjaman'));


                $hutang = $data_pinjaman['credit'];
                $bayar = $post['jumlah_pembayaran'];

                $pinjaman_lalu = $data_pinjaman['pinjaman_lalu'];
                // var_dump($hutang);
                // var_dump($data_pinjaman);exit();


                $total_bayar = $hutang - $bayar;


                $data_pinjaman->set('credit',$total_bayar);



                if ($data_pinjaman['credit'] == 0) {
                     $alert = "Selamat Member dengan NIK Tersebut Telah Melunasi Pinjaman Sebelumnya. Back !";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                    
                    $data_pinjaman->set('status', 'Lunas');
                    $data_pinjaman->set('jumlah_pinjam', $pinjaman_lalu);

                   
                }
                $data_pinjaman->save();
                $entry->set($post)->save();


               
                return;
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
            $this->app->redirect('pembayaran');
        }

    }
      public function search()
    {
        if ($_SESSION['user']['role'][0] == '1') {
            $entries = $this->collection->find($this->getCriteria())
                ->match($this->getMatch())
                ->sort($this->getSort())
                ->skip($this->getSkip())
                ->limit($this->getLimit());
            # code...
        } else {
            $entries = $this->collection->find(array('nik' => $_SESSION['user']['nik']))
            ->match($this->getMatch())
            ->sort($this->getSort())
            ->skip($this->getSkip())
            ->limit($this->getLimit());
        }
        $this->data['entries'] = $entries;
    }

   

    

    

}



