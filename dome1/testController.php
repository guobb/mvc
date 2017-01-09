<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/1/9
 * Time: 下午10:24
 */
class testController
{
    function show(){
        $testModel =  new testModel();
        $data =  $testModel -> get();
        $testView =  new testView();
        $testView -> display($data);
    }
}

?>