<?php
/*
 * 入口文件
 * 1定义常量
 * 2加载函数库
 * 3启动框架
 */
//定义当前框架所在的根目录
define('IMOOC',realpath('./'));
//框架的核心文件所处的目录
define('CORE',IMOOC.'/core');
//项目文件包括控制器，包括模型，试图所处的目录
define('APP',IMOOC.'/app');
define('MODULE','app');
//是否要开启调试模式
define('DEBUG',true);
include "vendor/autoload.php";
if(DEBUG){
    $whoops = new \Whoops\Run;
    $errorTitle = "框架出错了";
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option -> setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error','On');
}else{
    ini_set('display_error', 'Off');
}


//加载函数库
include CORE.'/common/function.php';
//p(IMOOC);
//加载框架的核心文件
include CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');
\core\imooc::run();
//日志类可能存在文件中，数据库中，缓存中
?>