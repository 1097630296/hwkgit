<?php
namespace app\model;
use core\lib\model;
class testModel extends model{
    public $table='test';
    public function all(){
        return $this->select($this->table,'*');
    }
    public function addOne($data){
        return $this->insert($this->table,$data);
    }
    public function delOne($id){
        $ret = $this->delete($this->table,array(
            "id"=>$id
        ));
        if($ret !== false){
            return true;
        }else{
            return false;
        }
    }


















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