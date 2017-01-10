<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/1/9
 * Time: 下午11:38
 */
    function C($name, $method){

        require_once('libs/Controller/'.$name.'Controller.php');

        // eval()函数调用简单但是不安全
        // eval('$obj = new '.$name.'Controller(); $obj -> '.$method.'();');
        // 用下面方法代替
        $controller =  $name.'controller';
        $obj = new $controller();
        $obj->$method();
    }

    function M($name){

        require_once('./libs/Model/'.$name.'Model.php');
        $model = $name.'Model';
        $obj = new $model();
        return $obj;
    }

    function V($name){

        require_once('./libs/View/'.$name.'View.php');
        $view = $name.'View';
        $obj = new $view();
        return $obj;

    }

/**
 * @param $path 路径
 * @param $name 第三方类名
 * @param array $params 该类初始化需要指定，赋值的属性，
 * 格式为array(属性名＝》属性值，属性名2=》属性值2...)
 */
    function ORG($path, $name, $params=array()){

        require_once('libs/ORG/'.$path.$name.'.class.php');
        $obj = new $name();
        if(!empty($patams)){
            foreach ($params as $key=>$value){
                $obj->$key($value);
            }
        }
        return $obj;

    }
?>
