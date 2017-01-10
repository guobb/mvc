<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/1/9
 * Time: 下午10:47
 * 1. 浏览者  ->  调用控制器，对它发出指令
 * 2. 控制器  ->  按指令选取一个合适的模型
 * 3. 模型    ->  按控制器指令取相应数据
 * 4. 控制器  ->  按指令选取相应视图
 * 5. 视图    ->  把第三步取到的数据按用户想要的样子现实出来
 */

    require_once('testController.php');
    require_once('testModel.php');
    require_once('testView.php');

    $testController = new testController();
    $testController -> show();