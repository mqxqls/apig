<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/26 0026
 * Time: 下午 22:30
 */

namespace app\api\validate;

use think\Validate;
class Tools extends Validate
{

    protected $rule=[
        'id' =>'require|is_id',
    ];

    protected function is_id($value,$rule,$data,$filed,$disc){

        return false;
    }
}