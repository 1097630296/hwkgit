<?php
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc{
    //所有留言
//    public function index(){
//        echo 123;
//    }
    public function index(){
        $model = new \app\model\testModel();
        $data = $model->all();
        $this->assign('data',$data);
        $this->display('index.html');
    }
    //添加留言
    public function add(){
        $this->display('add.html');
    }
    //保存留言
    public function save(){
        $data['title'] = post('title');
        $data['content'] = post('content');
        $model = new \app\model\testModel();
        $ret = $model->addOne($data);
        if($ret){
            jump("/");
        }else{
            echo "no";
        }
    }
    //删除留言
    public function del(){
        $id = get('id',0,'int');
        if($id){
            $model = new \app\model\testModel();
            $ret = $model->delOne($id);
            if($ret){
                jump('/');
            }else{
                exit('删除失败');
            }
        }else{
            exit('参数错误');
        }
    }
    //public function index(){
//        $data = "Hello World";
//        $this->assign('data',$data);
//        $this->display('index.html');
        //$model = new \app\model\cModel();
        //单查
        //$ret = $model->getOne(4);
        //print_r($ret);
        //修改
        //$data = array(
        //  'name'=>"mvc"
        //);
        //$ret  = $model->setOne(4,$data);
        //删除
        //$ret  = $model->delOne(8);
        //dump($ret);
        //$model = new model();
        //查询
        //$data = $model->select('c','*');
        //插入
//        $data = array(
//          'name'=>"IMOOC"
//        );
//        $res = $model->insert('c',$data);
//        dump($res);

      //}

}

?>