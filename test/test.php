<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/1/10
 * Time: 上午9:59
 */

    require('../smarty/Smarty.class.php');
    $smarty = new Smarty();

    //smarty五中配置的介绍
    $smarty -> left_delimiter = "{";    //左定界符
    $smarty -> right_delimiter = "}";   //右定界符
    $smarty -> setTemplateDir('tpl');   //html模版的地址
    $smarty -> setCompileDir('template_c'); //模版编译生成的文件
    $smarty -> setCacheDir('cache');    //缓存

    //以下是开启缓存的另两个配置，因为通常不用smarty的缓存机制
    $smarty->debugging = true;
   // $smarty->caching = true;
   // $smarty->cache_lifetime = 120;

    $smarty -> assign('articletitle','wenazzzz');
    $smarty -> display('text.tpl');