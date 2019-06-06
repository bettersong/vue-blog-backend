<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/5/29
 * Time: 19:08
 */

namespace Home\Controller;


use Think\Controller;
use Think\Model;

class FrontEndController extends Controller
{
    public function index(){
        $this->display('index');
    }
    public function add(){
        $data['title'] = $_POST['title'];
        $data['bigclass'] = $_POST['bigClass'];
        $data['smclass'] = $_POST['smClass'];
        $data['content'] = $_POST['content'];
        $data['img'] = $_POST['img'];
        $data['time'] = $_POST['time'];
        $data['see'] = 1;
        $data['zan'] = 1;
        $wenzhangModel = new Model('wenzhang');
        $res = $wenzhangModel->add($data);
        echo json_encode($res);
    }
}