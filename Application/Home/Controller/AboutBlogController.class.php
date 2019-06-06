<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/5/29
 * Time: 20:13
 */

namespace Home\Controller;


use Think\Controller;
use Think\Model;
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT');
class AboutBlogController extends Controller
{
    public function index(){
        $this->display('index');
    }
    public function update(){
        $name = $_POST['name'];
        $data['city'] = $_POST['city'];
        $data['introduce'] = $_POST['introduce'];
        $data['birthplace'] = $_POST['birthplace'];
        $data['profession'] = $_POST['profession'];
        $data['education'] = $_POST['education'];
        $model = new Model('aboutblog');
        $res = $model->where("name='$name'")->save($data);
        //var_dump($data) ;
        echo $res;
        //var_dump($data);
    }
    public function showInfo(){
        $model = new Model('aboutblog');
        $res = $model->find();
        echo json_encode($res);
        //var_dump($res);
    }

}