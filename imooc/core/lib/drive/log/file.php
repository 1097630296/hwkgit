<?php
namespace core\lib\drive\log;
use core\lib\conf;
//把日志存在文件系统中
class file{
    public $path;#日志储存位置
    public function __construct(){
        $conf = conf::get('OPTION','log');
        $this->path = $conf['PATH'];
    }
    public function log($message,$file = 'log'){
//        p($name);
        /*
         * 1确定文件储存位置是否存在
         * 新建目录
         * 2写入日志
         */
        //p($this->path);exit();
        if(!is_dir($this->path.date('YmdH'))){
            mkdir($this->path.date('YmdH'),'0777',true);
        }
        //$message = date('Y-m-d H:i:s').$message;
        //p($this->path.date('YmdH').'/'.'.php');exit();
        return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);

    }
}

?>