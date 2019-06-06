<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/5/28
 * Time: 19:17
 */

namespace Home\Controller;


use Home\Model\BookModel;
use Think\Controller;
use Home\Model\BrokenModel;
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT');
class BrokenController extends Controller
{
    public function index(){
        $Broken = new BrokenModel();
        $result = $Broken->select();
        $this->assign('broken',$result);
        $this->display('index');
    }
    public function addBroken(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        $time = $_POST['time'];
        $Broken = new BrokenModel();
        $res = $Broken->addBroken($name,$email,$content,$time);
        echo $res;
    }
    public function showBroken(){
        $Broken = new BrokenModel();
        $res = $Broken->order('time desc')->select();
        echo json_encode($res);
    }
    public function delete(){
        $id = $_POST['id'];
        $Broken = new BrokenModel();
        $result = $Broken->where('id='.$id)->delete();
        echo $result;
    }
}