<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/27 0027
 * Time: 下午 20:43
 */

namespace app\api\validate;


use app\lib\exception\ParamterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    protected $rule= [
        'id'=>'require|is_ints',
        'num'=>'in:1,2,3'
    ];
    public function getCheck(){

        $request=Request::instance();
        $param=$request->param();

        $res=$this->batch()->check($param);
        if(!$res){
            $error=$this->getError();

            $e=new ParamterException(['code'=>402,'errorcode'=>901,'msg'=>$this->error]);

            throw  $e;
        }else{
            return true;
        }
    }

    public function is_ints($value,$rule,$data,$filed,$desc){

        if( ($value+0) >0  && is_numeric($value) && is_int($value +0 )){
                return true;
        }else{
            return $filed."值非法";
        }
    }

}