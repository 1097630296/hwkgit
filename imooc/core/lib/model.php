<?php
namespace core\lib;
use core\lib\conf;
class model extends \medoo{
    public function __construct(){
//        $dsn = "mysql:host=localhost;dbname=test";
//        $username = 'root';
//        $passwd = 'root';
//        $database = conf::all('database');
//        //p($database);
//        try{
//            parent::__construct($database['DSN'],$database['USERNAME'],$database['PASSWD']);
//        }catch (\PDOException $e){
//            p($e->getMessage());
//        }
        $option = conf::all('database');
        parent::__construct($option);
    }
}


?>