<?php
/**
 * Created by PhpStorm.
 * User: songy
 * Date: 2019/5/27
 * Time: 19:07
 */

namespace Home\Controller;


use Think\Controller;
use Think\Model;
use Home\Model\AdminModel;

class AdminController extends Controller
{
    public function setLogin(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userModel = new AdminModel();
        $result = $userModel->queryLogin($username,$password);
        if($result == null){
            echo 0;
        }else{
            $_SESSION['userinfo']=$result;
            //$this->assign('flag',1);
            echo 1;
        }
    }
    public function logout(){
        session_destroy();
        redirect('../Admin/index', 1, '退出中..');
    }
}