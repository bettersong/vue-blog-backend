<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/5/29
 * Time: 23:02
 */

namespace Home\Controller;


use Think\Controller;
use Think\Model;

class ManageController extends Controller
{
    public function index(){
        $type = $_GET['type'];
        $model = new Model('wenzhang');
        if($type == 'fullstack'){
            $result = $model->where('bigclass="全栈开发"')->getField('id,title,bigclass,smclass,time,see,zan');
            $this->assign('wenzhang',$result);
            $this->display('index');
        }else if($type == 'frontend'){
            $result = $model->where('bigclass="前端开发"')->getField('id,title,bigclass,smclass,time,see,zan');
            $this->assign("wenzhang",$result);
            $this->display('index');
        }
        else{
            //$result = $model->select();
            $result = $model->getField('id,title,bigclass,smclass,time,see,zan');
            $this->assign('wenzhang',$result);
            $this->assign('type',$type);
            $this->display('index');
        }

    }
    public function delete(){
        $id = $_POST['id'];
        $model = new Model('wenzhang');
        $result = $model->where('id ='. $id)->delete();
        echo $result;
    }

}