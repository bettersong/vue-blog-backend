<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function index(){
        $model = new Model('broken');
        $broken = $model->count();
        $model2 = new Model('wenzhang');
        $frontend = $model2->where('bigclass="前端开发"')->count();
        $fullstack = $model2->where('bigclass="全栈开发"')->count();
        $model3 = new Model('mood');
        $mood = $model3->count();
        if(isset($_SESSION['userinfo'])){
            $this->assign('broken',$broken);
            $this->assign('frontend',$frontend);
            $this->assign('fullstack',$fullstack);
            $this->assign('mood',$mood);
            $this->display('index');
        }else{
            //$this->error('请先登录','./User/showlogin',2);
            redirect('../Admin/index');
        }

    }
}