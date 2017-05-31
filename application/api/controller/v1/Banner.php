<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/24 0024
 * Time: 下午 23:46
 */

namespace app\api\controller\v1;


use app\api\validate\Tools;

class Banner
{
    /*
     * $url /banner/:id
     * $http get
     * $id banner 的id号
     */
    public function getBanner($id){

        $valite =new Tools();

        if($valite->check(['id'=>$id])){
          return  $valite->getError();
        }
    }
}