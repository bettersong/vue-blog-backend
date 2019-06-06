<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/5/29
 * Time: 20:05
 */

namespace Home\Controller;


use Think\Controller;
use Think\Model;

class FullStackController extends Controller
{
    public function index(){
        $this->display('index');
    }
    public function add(){
        $data['title'] = $_POST['title'];
        $data['bigclass'] = $_POST['bigclass'];
        $data['smclass'] = $_POST['smclass'];
        $data['content'] = $_POST['content'];
        $data['img'] = $_POST['img'];
        $data['time'] = $_POST['time'];
        $data['see'] = 1;
        $data['zan'] = 1;
        $model = new Model('wenzhang');
        $result = $model->add($data);
        echo $result;
    }

}