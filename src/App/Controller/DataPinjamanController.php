<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;


class DataPinjamanController extends AppController
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
                // $post = $this->request->getBody();
                // $data_pinjaman = Norm::factory('Pinjaman')->findOne(array('nik' => $post['nik']));

                // if ($post['tenor'] == 1) {
                //     $angsuran = $post['jumlah_pinjam'];
                //     $biaya_adm = $post['biaya_adm'];
                //     $angsuran = $angsuran/6;
                //     $angsuran = $angsuran + $biaya_adm;
                //     $data_pinjaman->set('angsuran',$angsuran);
                    // var_dump($angsuran);exit();
                    // if ($data_pinjaman['jumlah_wajib'] < $post['jumlah'])  {
                    //     $alert = "Saldo Simpanan Wajib Tidak Cukup";
                    //     echo "<script type='text/javascript'>alert('$alert');</script>";
                    //     return;
                    // }else{
                    //     $total_wajib = $data_pinjaman['jumlah_wajib'] - $post['jumlah'];
                    //     $data_pinjaman->set('jumlah_wajib', $total_wajib);

                    // }
                // }elseif ($post['tenor'] == 2) {
                //     if ($data_pinjaman['jumlah_pokok'] < $post['jumlah']) {
                //         $alert = "Saldo Simpanan Pokok Tidak Cukup";
                //         echo "<script type='text/javascript'>alert('$alert');</script>";
                //         return;
                //     }else{
                //         $total_pokok = $data_pinjaman['jumlah_pokok'] - $post['jumlah'];
                //         $data_pinjaman->set('jumlah_pokok',$total_pokok);
                //     }
                // }elseif ($post['tenor'] == 3) {
                //     if ($data_pinjaman['jumlah_umrah'] < $post['jumlah']) {
                //         $alert = "Saldo Simpanan Umrah Tidak Cukup";
                //         echo "<script type='text/javascript'>alert('$alert');</script>";
                //         return;
                //     }else{
                //         $total_umrah = $data_pinjaman['jumlah_umrah'] - $post['jumlah'];
                //         $data_pinjaman->set('jumlah_umrah',$total_umrah);
                //     }
                // }elseif ($post['tenor'] == 4) {
                //     if ($data_pinjaman['jumlah_qurban'] < $post['jumlah']) {
                //         $alert = "Saldo Simpanan Qurban Tidak Cukup";
                //         echo "<script type='text/javascript'>alert('$alert');</script>";
                //         return;
                //     }else{
                //         $total_qurban = $data_pinjaman['jumlah_qurban'] - $post['jumlah'];
                //         $data_pinjaman->set('jumlah_qurban',$total_qurban);
                //     }
                // }elseif ($post['tenor'] == 5) {
                //     if ($data_pinjaman['jumlah_haji'] < $post['jumlah']) {
                //         $alert = "Saldo Simpanan Haji Tidak Cukup";
                //         echo "<script type='text/javascript'>alert('$alert');</script>";
                //         return;
                //     }else{
                //         $total_haji = $data_pinjaman['jumlah_haji'] - $post['jumlah'];
                //         $data_pinjaman->set('jumlah_haji',$total_haji);
                //     }
                // }
                // $data_pinjaman->save();
                // $entry->set($post)->save();

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
            $this->app->redirect('angsuran');
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
        } else {
            // var_dump($_SESSION['user']['nik']);exit();
            $entries = $this->collection->find(array('nik' => $_SESSION['user']['nik']))
            ->match($this->getMatch())
            ->sort($this->getSort())
            ->skip($this->getSkip())
            ->limit($this->getLimit());
        }
        $this->data['entries'] = $entries;
    }

   

    

    

}



