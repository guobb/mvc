<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/1/9
 * Time: 下午10:24
 * 控制器的作用是调用模型，并调用视图，将模型产生的数据传递给视图，并让相关视图去现实
 */

class testController
{
    function show(){

        global $view;

        $testModel =  M('test');
        $data =  $testModel -> get();
        /*$testView =  V('test');
        $testView -> display($data);*/

        $view -> assign('str','ddd');
        $view -> display('text.tpl');

    }
}

?>