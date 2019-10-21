<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;


class DataSimpananController extends AppController
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
        $template = $this->app->theme->partial('pdf/kwitansi_pinjaman', array(
            'collection' => $collection, 
           
        ));
       
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('kwitansi_pinjaman.pdf', array("Attachment" => false));
        exit;
    }

    public function update($id)
    {
        try {
            $entry = $this->collection->findOne($id);
        } catch (Exception $e) {
            // noop
        }

        if (is_null($entry)) {
            return $this->app->notFound();
        }

        if ($this->request->isPost() || $this->request->isPut()) {
            try {
                $merged = array_merge(
                    isset($entry) ? $entry->dump() : array(),
                    $this->request->getBody() ?: array()
                );

                $entry->set($merged)->save();

                h('notification.info', $this->clazz.' updated');

                h('controller.update.success', array(
                    'model' => $entry,
                ));
            } catch (Stop $e) {
                throw $e;
            } catch (Exception $e) {
                h('notification.error', $e);

                if (empty($entry)) {
                    $model = null;
                }

                h('controller.update.error', array(
                    'error' => $e,
                    'model' => $entry,
                ));
            }
        }

        $this->data['entry'] = $entry;
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



