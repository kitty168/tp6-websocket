<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        $data = null;
        return json(['code'=>200,'msg'=>'success','data'=>$data]);
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
