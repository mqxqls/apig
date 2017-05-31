<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/30 0030
 * Time: 上午 9:43
 */

namespace app\lib\exception;


class BannerMissExcepiton extends BaseException
{
    public $code=401;
    public $msg="bannser自定义异常";
    public $errorcode=901;
}