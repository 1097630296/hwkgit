<?php
namespace core\lib;
class conf{
    //静态的配置属性
    static public $conf=array();
    //静态，加载名称，文件
    static  public function get($name,$file){
        /*
         * 1判断配置文件是否存在
         * 2判断对应的配置是否存在
         * 3缓存配置
         */
        //如果缓存的配置已经缓存过了，而直接返回，而不用再去加载配置文件了
        //p(self::$conf);
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }else{
            //p(1);
            $path = IMOOC.'/core/config/'.$file.'.php';
            //p($file);exit;
            if(is_file($path)){
                $conf = include $path;
                if(isset($conf[$name])){
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                }else{
                    throw new \Exception('没有这个配置项'.$conf);
                }
            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }
    }
    //引入数据库配置文件
    static public function all($file){
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }else{
            //p(1);
            $path = IMOOC.'/core/config/'.$file.'.php';
            //p($file);exit;
            if(is_file($path)){
                $conf = include $path;
                self::$conf[$file] = $conf;
                 return $conf;
            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }
    }
}


?>