<?php
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc{
    //首页
    public function index(){
        $this->display('index.html');
    }
    //列表
    public function lists(){
        $model = new \app\model\testModel();
        $data = $model->all();
        $this->assign('data',$data);
        $this->display('lists.html');
    }
    //每一条的详细信息
    public function add(){
        $id = get('id');
        $model = new \app\model\testModel();
        $data = $model->selectOne($id);
        $this->assign('data',$data);
        $this->display('message.html');
    }
    //遮罩层添加
    public function commit(){
        $data['title'] = post('title');
        $data['content'] = post('content');
        $data['times'] = date('Y-m-d H:m:i',time());
        $model = new \app\model\testModel();
        $data = $model->addOne($data);
        if($data){
            jump('/index/lists');
        }else{
            exit('添加失败');
        }
    }
    //登录
    public function login(){
        $this->display('login.html');
    }
    //判断
    public function islogin(){
        $username  = post('username');
        $pwd  = post('pwd');
        $model = new \app\model\testModel();
        $data = $model->islogin($username,$pwd);
        $a = $data['0']['id'];
        if($data){
            $_SESSION['id']=$a;
            $this->display('first.html');
        }else{
            exit('登录失败');
        }
    }
    //个人中心
    public function first(){
        if(empty($_SESSION['id'])){
            jump('/index/login');
        }else{
            $id=$_SESSION['id'];
            $model = new \app\model\testModel();
            $data = $model->person($id);
            $this->assign('data',$data);
            $this->display('first.html');
        }

    }

    //所有留言
//    public function index1(){
//        $model = new \app\model\testModel();
//        $data = $model->all();
//        $this->assign('data',$data);
//        $this->display('index.html');
//    }
//    //添加留言
//    public function add(){
//        $this->display('add.html');
//    }
//    //保存留言
//    public function save(){
//        $data['title'] = post('title');
//        $data['content'] = post('content');
//        $model = new \app\model\testModel();
//        $ret = $model->addOne($data);
//        if($ret){
//            jump("/");
//        }else{
//            echo "no";
//        }
//    }
    //删除留言
//    public function del(){
//        $id = get('id',0,'int');
//        if($id){
//            $model = new \app\model\testModel();
//            $ret = $model->delOne($id);
//            if($ret){
//                jump('/');
//            }else{
//                exit('删除失败');
//            }
//        }else{
//            exit('参数错误');
//        }
//    }


}

?>