<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/29 0029
 * Time: 下午 18:42
 */

namespace app\lib\exception;
use Exception;
use think\exception\Handle;
use think\Request;
use think\Log;
class ExceptionHandle extends Handle
{
    private $code=400;
    private $msg="";
    private $errorcode=901;
    public function render(Exception $e)
    {
        if($e instanceof ParamterException){
            $this->code=$e->code;
            $this->errorcode=$e->errorcode;
            $this->msg=$e->msg;
        }else{
            if(config('app_debug')){
               return parent::render($e);

            }else{
                $this->code=500;
                $this->errorcode=900;
                $this->msg='system error';
                $this->writeLog($e->getMessage());
            }


        }

        $request=Request::instance();


       $res=['errorcode'=>$this->errorcode,'msg'=>$this->msg,'url'=>$request->url()];

       return json($res,$this->code);
    }

    private function writeLog($msg){
        Log::init([
            'type'=>'file',
            'path'=>LOG_PATH,
            'lever'=>['error']
        ]);

        Log::record($msg,'error');
    }
}