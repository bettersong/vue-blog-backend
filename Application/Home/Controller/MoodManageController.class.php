<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/6/1
 * Time: 22:08
 */

namespace Home\Controller;


use Think\Controller;
use Think\Model;
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT');
class MoodManageController extends Controller
{
    public function index(){
        $model = new Model('mood');
        $resule = $model->select();
        $this->assign('mood',$resule);
        $this->display('index');
    }
    public function delete(){
        $id = $_POST['id'];
        $model = new Model('mood');
        $result = $model->where('id='.$id)->delete();
        echo $result;
    }
    public function showMood8(){
        $model = new Model('mood');
        $result = $model->limit(8)->order('id desc')->select();
        echo json_encode($result);
    }

}