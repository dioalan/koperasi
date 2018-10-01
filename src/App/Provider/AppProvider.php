<?php

namespace App\Provider;
use Norm\Norm;


class AppProvider extends \Bono\Provider\Provider
{
    public function initialize()
    {
        $app = $this->app;

        // do something here
         $app->get('/index', function () use ($app) {
         

          

            $member = Norm::factory('User')->find();
            foreach ($member as $key => $value) {
                $pass = md5($value['password']);
            var_dump($value['password']);
            }
            var_dump('ex');
            exit();


            $app->response->template('static/index');

        });
    }
}
