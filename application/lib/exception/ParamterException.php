<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/30 0030
 * Time: 下午 16:24
 */

namespace app\lib\exception;


class ParamterException extends BaseException
{
    public $code=403;
    public $errorcode=904;
    public $msg='参数错误';


}