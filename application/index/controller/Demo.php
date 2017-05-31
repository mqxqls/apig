<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/23 0023
 * Time: 下午 23:21
 */

namespace app\index\controller;


use app\api\validate\BaseValidate;
use app\lib\exception\BannerMissExcepiton;

use think\Exception;
use think\Request;

class Demo
{
    public function index(){
        $all=Request::instance()->param();
        var_dump($all);
    }

    public function hell($id){
        try{
            (new BaseValidate())->getCheck();
        }catch (Exception $e){
            throw $e;
        }

    }
}