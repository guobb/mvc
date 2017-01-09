<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/1/10
 * Time: 上午12:49
 */

    //url形式 index.php?controller=控制器名&method=方法名

    require_once('function.php');

    $whiteArr = ['test@model','test@show'];
    $controller = isset($_GET['c'])?sAddslashes($_GET['c']):'test';
    $method = isset($_GET['m'])?sAddslashes($_GET['m']):'show';
    in_array($controller.'@'.$method, $whiteArr)?:die;
    C($controller,$method);
?>