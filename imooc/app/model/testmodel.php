<?php
namespace app\model;
use core\lib\model;
header('content-type:text/html;charset=utf-8');
class testModel extends model{
    public $table='test';
    //列表
    public function all(){
        return $this->select($this->table,'*');
    }
    //详细信息
    public function selectOne($id){
        return $this->select($this->table,"*",array(
            'id'=>$id
        ));
    }
    //添加
    public function addOne($data){
        return $this->insert($this->table,$data);
    }
    //个人中心判断登录
    public function islogin($username,$pwd){
        return $this->select('user','*',array(
            'AND'=> [
                'username'=>$username,
                'pwd'=>$pwd
            ],

        ));
    }
    //个人信息
    public function person($id){
        return $this->select('user','*',array(
            'id'=>$id
        ));
    }
//    public function delOne($id){
//        $ret = $this->delete($this->table,array(
//            "id"=>$id
//        ));
//        if($ret !== false){
//            return true;
//        }else{
//            return false;
//        }
//    }


















//    //查询
//    public function lists(){
//        $ret  = $this->select($this->table,'*');
//        return $ret;
//    }
//    //查询单挑
//    public function getOne($id){
//        $ret = $this->get($this->table,'*',array(
//            'id'=>$id
//        ));
//        return $ret;
//    }
//    //修改
//    public function setOne($id,$data){
//        return $this->update($this->table,$data,array(
//           'id'=>$id
//        ));
//    }
//    //删除
//    public function delOne($id){
//        return  $this->delete($this->table,array(
//            'id'=>$id
//        ));
//    }

}


?>