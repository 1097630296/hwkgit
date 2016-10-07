<?php
namespace core\lib;
class log{
    static $class;
    /*
     * 1确定日志的存储方式
     * 2写日志
     */
    static  public function init(){
        //确定存储放方式
        $drive = conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }
    static public function log($name,$file='log'){
        self::$class->log($name,$file);
    }

}



?>