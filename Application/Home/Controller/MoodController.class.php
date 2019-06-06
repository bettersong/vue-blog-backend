<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/5/29
 * Time: 19:58
 */

namespace Home\Controller;


use Think\Controller;

class MoodController extends Controller
{
    public function index(){
        $this->display('index');
    }
    public function add(){
        $data['moodtag'] = $_POST['tag'];
        $data['moodlogo'] = $_POST['logo'];
        $data['moodcolor'] = $_POST['color'];
        $data['moodcontent'] = $_POST['content'];
        $data['moodtime'] = $_POST['time'];
        $model = M('mood');
        $result = $model->add($data);
        echo $result;
    }

}