<?php

namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;
class Controller extends BaseController
{
    public function responseFormat($vdata, $url,$name = 'search', $errorid = 0, $errordesc = '')
    {
        $return['name'] = $name;
        $return['url'] = $url;
        $return['errorid'] = $errorid;
        $return['errordesc'] = $errordesc;
        $return['vdata'] = $vdata;

        return response($return)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST')
            ->header('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
    }

    public function ipLimit() {

    }
}
