<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;
use App\Library\HtmlExcel;


class PinjamanController extends AppController
{


       public function mapRoute(){
        parent::mapRoute();

        //print kwitansi
        $this->map('/:id/pdf', 'pdf')->via('GET', 'POST');
        //print laporan pdf
        $this->map('/laporan_pinjaman/export', 'laporan')->via('GET', 'POST');
        //print html excel
        $this->map('/null/export', 'export')->via('GET', 'POST');

    }

    public function pdf ($id) {

        $collection = Norm::factory('User')->findOne(array('$id' => $id));
        $this->data['collection'] = $collection;
        $model_pinjaman = Norm::factory('Pinjaman')->findOne(array('$id' => $id));
        $model_user = Norm::factory('User')->findOne(array('nik' => $model_pinjaman['nik']));
        $session = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];
        $data_pinjaman = Norm::factory('DataPinjaman')->findOne(array('nik' => $model_pinjaman['nik']));
        // var_dump($collection);exit();

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/kwitansi_pinjaman', array(
            'collection' => $collection, 
            'model_pinjaman' => $model_pinjaman,
            'model_user' => $model_user, 
            'session' => $session, 
            'data_pinjaman' => $data_pinjaman, 
           
        ));
       
        $dompdf->setPaper('B5', 'landscape');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('kwitansi_pinjaman.pdf', array("Attachment" => false));
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

                $arr = array(
                        '01' => '6',
                        '02' => '12',
                        '03' => '18', 
                        '04' => '24', 
                        '05' => '36', 
                        '06' => '48',
                );

                $hutang = $post['jumlah_pinjam'];
                $tenor = $arr[$post['tenor']];
                $angsuran = $hutang / $tenor + $post['biaya_adm'];
                $total = $angsuran;
                $credit = $angsuran * $tenor;

                $data_pinjaman = Norm::factory('DataPinjaman')->newInstance();


                $model_data_pinjam = Norm::factory('DataPinjaman')->findOne(array('nik'=> $post['nik'], 'status' => 'Pinjaman'));
                
                $data_pinjaman->set('nik', $post['nik']);
                $data_pinjaman->set('jumlah_pinjam', $post['jumlah_pinjam']);
                $data_pinjaman->set('tenor', $post['tenor']);
                $data_pinjaman->set('biaya_adm', $post['biaya_adm']);
                $data_pinjaman->set('ket', $post['ket']);
                // $data_pinjaman->set('tanggal', $post['tanggal']);
                $data_pinjaman->set('tanggal', $post['tanggal']);
                $data_pinjaman->set('angsuran', $total);
                $data_pinjaman->set('credit', $credit);
                $data_pinjaman->set('status', $post['status']);
                $data_pinjaman->set('pinjaman_lalu', $post['jumlah_pinjam']);


                // var_dump($data_pinjaman['pinjaman_lalu']);exit();

                
                if (isset($model_data_pinjam)) {
                    $alert = "Pinjam Gagal ! Member dengan NIK Tersebut Belum Melunasi Pinjaman Sebelumnya";
                        echo "<script type='text/javascript'>alert('$alert');</script>";
                        return;
                }
                $entry->set($post)->save();
                $data_pinjaman->save();


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
            $this->app->redirect('pinjaman');

        }

    }
    public function export() {

        $a = $this->collection->find();
        var_dump(count($a));exit();
        $collection = \Norm::factory('Pinjaman')->find();
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

        // var_dump('expression');exit();

        $model_pinjaman = Norm::factory('Pinjaman')->find();
        // $model_user = Norm::factory('User')->findOne(array('nik' => $model_pinjaman['nik']));

        // $this->data['model_pinjaman'] = $model_pinjaman;
        // $this->data['model_user'] = $model_user;
        
        // var_dump($model_pinjaman['nik']);
        // var_dump($model_user['first_name']);
        // exit();

       
        $session = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];
        // var_dump($session);exit();

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/laporan_pinjaman', array(
            'model_pinjaman' => $model_pinjaman,
            // 'model_user' => $model_user, 
            // 'session' => $session


           
        ));
       
        $dompdf->setPaper('A4', 'portait');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('kwitansi_simpanan.pdf', array("Attachment" => false));
        exit;
    }

   

    

    

}



