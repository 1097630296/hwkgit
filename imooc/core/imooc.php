<?php
namespace core;
class imooc{
    //判断是否重复引入的
    public static $classMap = array();
    public $assign;
    static public function run(){
        \core\lib\log::init();
        \core\lib\log::log($_SERVER,'server');
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        //判断控制器是否存在
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $cltrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        //p($ctrlfile);exit;
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $cltrlClass();
            $ctrl->$action();
            \core\lib\log::log('ctrl:'.$ctrlClass.'    '.'action:'.$action);
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }
    static public function load($class){
        //自动加载类
        //new  \core\route();
        //$class = '\core\route';
        //IMOOC.'/core/route.php';
        //p($class);
        //p(IMOOC.'/'.$class.'.php');
        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\','/',$class);
            //判断这个类是否是文件
            $file = IMOOC.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class]=$class;
            }else{
                return false;
            }
        }
    }

    public function assign($name,$value){
        $this->assign[$name] = $value;
    }

    public function display($file){
        $view = $file;
        $file = APP.'/views/'.$file;
        //p($file);
        if(is_file($file)){
            //p($this->assign);exit;
            //extract($this->assign);
            //include $file;
            \Twig_Autoloader::register();

            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => IMOOC.'/log/twig',
                'debug'=>DEBUG
            ));
            $template = $twig->loadTemplate($view);
            $template->display($this->assign?$this->assign:array());
        }
    }



}


?>