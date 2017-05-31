<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/30 0030
 * Time: 上午 9:42
 */

namespace app\lib\exception;


use think\Exception;
use Throwable;

class BaseException extends Exception
{
    public $code=400;
    public $msg="自定义异常";
    public $errorcode=9000;

    public function __construct($param=[])
    {
        if(!is_array($param)){
            return false;
        }

        if(array_key_exists('code',$param)){
            $this->code=$param['code'];
        }

        if(array_key_exists('errorcode',$param)){
            $this->errorcode=$param['errorcode'];
        }

        if(array_key_exists('msg',$param)){
            $this->msg=$param['msg'];
        }
    }
}