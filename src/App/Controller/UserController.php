<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;
use Dompdf\Dompdf;


class UserController extends AppController
{


    public function mapRoute(){
        parent::mapRoute();

        $this->map('/:id/pdf', 'pdf')->via('GET', 'POST');
        $this->map('/null/export', 'export')->via('GET', 'POST');
        $this->map('/laporan_user/export', 'laporan')->via('GET', 'POST');

        
    }

    public function laporan () {


        $model_user = Norm::factory('User')->find();
       
        // $session = $_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/laporan_user', array(
            'model_user' => $model_user,

           
        ));
       
        $dompdf->setPaper('A4', 'portait');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('laporan_user.pdf', array("Attachment" => false));
        exit;
    }

    public function pdf ($id) {

        $collection = Norm::factory('User')->findOne(array('$id' => $id));
        $this->data['collection'] = $collection;
        // var_dump($collection);exit();

        $dompdf = new Dompdf();
        $template = $this->app->theme->partial('pdf/print_member', array(
            'collection' => $collection, 
           
        ));
       
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->loadHtml($template);
        $dompdf->render();
        $dompdf->stream('new_member.pdf', array("Attachment" => false));
        exit;

    }

     public function create()
    {
        $entry = $this->collection->newInstance()->set($this->getCriteria());

        $this->data['entry'] = $entry;

        if ($this->request->isPost()) {
            try {

                //mempost data yg di input pada saat create user
                $post = $this->request->getBody();
                $result = $entry->set($post)->save();

                if ($post['role'][0]=='2') {
                    $data_simpanan = Norm::factory('DataSimpanan')->newInstance();
                    $data_simpanan->set('nik', $post['nik']);
                    $data_simpanan->set('first_name', $post['first_name']);
                    $data_simpanan->save();
                }
                

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

    public function export() {

        $a = $this->collection->find();
        var_dump(count($a));exit();
        $collection = \Norm::factory('User')->find();
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